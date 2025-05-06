@extends('backend.layouts.main')
@section('title', 'Users List')
@section('main-container')

<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/admin/user-add') }}">
                <button class="btn btn-primary">Back to User Add</button>
            </a>
        </div>
        <div class="card-body">
            <div id="messageBox" class="alert d-none" role="alert"></div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Trainer(s)</th>
                            <th width="160px">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="usersList">
                        <!-- Users data will be dynamically loaded here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal" id="editUserModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    <input type="hidden" id="editDocID">

                    <div class="mb-3">
                        <label for="editStatus" class="form-label">Status</label>
                        <select class="form-control" id="editStatus" required>
                            <option value="1">Subscribed</option>
                            <option value="0">Unsubscribed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Firebase Integration -->
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
    import { getFirestore, doc, deleteDoc, collection, getDocs, updateDoc } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-firestore.js";
    import { getAuth } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-auth.js";

    const firebaseConfig = {
        apiKey: "AIzaSyCxhw4mtLWCTgIAeyhZenX53ivbUjRQvao",
        authDomain: "gymx-9c9f1.firebaseapp.com",
        projectId: "gymx-9c9f1",
        storageBucket: "gymx-9c9f1.appspot.com",
        messagingSenderId: "1040269922176",
        appId: "1:1040269922176:web:977b39ec6ba8ce0ad13b65",
        measurementId: "G-KL887G7ZX5"
    };

    const app = initializeApp(firebaseConfig);
    const db = getFirestore(app);
    const auth = getAuth(app);

    // Load Users and Trainers
    window.loadUsers = async function () {
        const usersListEl = document.getElementById('usersList');
        usersListEl.innerHTML = '<tr><td colspan="6" class="text-center">Loading users...</td></tr>';

        try {
            const [userSnap, trainerSnap] = await Promise.all([
                getDocs(collection(db, "users")),
                getDocs(collection(db, "trainer"))
            ]);

            // Prepare trainer mapping by user UID
            const trainerMap = {}; // userId => [trainerNames]
            trainerSnap.forEach((trainerDoc) => {
                const trainer = trainerDoc.data();
                const name = trainer.name || 'Unnamed';

                if (Array.isArray(trainer.clientUids)) {
                    trainer.clientUids.forEach(uid => {
                        if (!trainerMap[uid]) trainerMap[uid] = [];
                        trainerMap[uid].push(name);
                    });
                }
            });

            let usersHTML = '';
            userSnap.forEach((doc) => {
                const user = doc.data();
                const uid = doc.id;
                const statusValue = Number(user.status);

                const statusBadge = statusValue === 1
                    ? '<span class="badge badge-success p-2">Subscribed</span>'
                    : '<span class="badge badge-danger p-2">Unsubscribed</span>';

                const assignedTrainers = trainerMap[uid] || [];
                const trainerDisplay = assignedTrainers.length > 0 ? assignedTrainers.join(", ") : '<i>No Trainer</i>';

                usersHTML += `
                    <tr id="user-${uid}">
                        <td>${uid}</td>
                        <td>${user.userName}</td>
                        <td>${user.email}</td>
                        <td>${statusBadge}</td>
                        <td>${trainerDisplay}</td>
                        <td>
                            <button class="btn btn-success btn-circle btn-sm" onClick="openEditForm('${uid}', '${user.status}')">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                `;
            });

            usersListEl.innerHTML = usersHTML;

        } catch (error) {
            showMessage("Error loading users: " + error.message, "danger");
        }
    };

    window.openEditForm = function (uid, status) {
        document.getElementById('editDocID').value = uid;
        document.getElementById('editStatus').value = status;

        const editModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        editModal.show();
    };

    document.getElementById('editUserForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const uid = document.getElementById('editDocID').value;
        const status = document.getElementById('editStatus').value;

        try {
            await updateDoc(doc(db, "users", uid), { status: status });
            showMessage("User status updated successfully!", "success");

            const modalElement = document.getElementById('editUserModal');
            const modal = bootstrap.Modal.getInstance(modalElement);
            modal.hide();

            loadUsers();
        } catch (error) {
            showMessage("Error updating user status: " + error.message, "danger");
        }
    });

    function showMessage(message, type) {
        const box = document.getElementById('messageBox');
        box.className = `alert alert-${type}`;
        box.textContent = message;
        box.classList.remove('d-none');
    }

    window.onload = loadUsers;
</script>

@endsection
