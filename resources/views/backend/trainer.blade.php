@extends('backend.layouts.main')
@section('title', 'Trainers List')
@section('main-container')

<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/admin/trainer-add') }}">
                <button class="btn btn-primary">Back to Trainer Add</button>
            </a>
        </div>
        <div class="card-body">
            <div id="messageBox" class="alert d-none" role="alert"></div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th width="160px">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="trainersList">
                        <!-- Trainers data will be dynamically loaded here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Trainer Modal -->
<div class="modal" id="editTrainerModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Trainer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editTrainerForm">
                    <input type="hidden" id="editDocID">

                    <div class="mb-3">
                        <label for="editFullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="editFullName" required>
                    </div>

                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" required>
                    </div>

                    <div class="mb-3">
                        <label for="editPhoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="editPhoneNumber" required>
                    </div>

                    <div class="mb-3">
                        <label for="editCategory" class="form-label">Category</label>
                        <input type="text" class="form-control" id="editCategory" required>
                    </div>

                    <div class="mb-3">
                        <label for="editStatus" class="form-label">Status</label>
                        <select class="form-control" id="editStatus" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="pending">Pending</option>
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

    window.loadTrainers = async function () {
        const trainersListEl = document.getElementById('trainersList');
        trainersListEl.innerHTML = '<tr><td colspan="7" class="text-center">Loading trainers...</td></tr>';

        try {
            const querySnapshot = await getDocs(collection(db, "trainer"));
            let trainersHTML = '';
            querySnapshot.forEach((doc) => {
                const trainer = doc.data();
                const uid = doc.id;

                let statusBadge = '';
                if (trainer.status === 'active') {
                    statusBadge = '<span class="badge badge-success p-2">Active</span>';
                } else if (trainer.status === 'inactive') {
                    statusBadge = '<span class="badge badge-danger p-2">Inactive</span>';
                } else if (trainer.status === 'pending') {
                    statusBadge = '<span class="badge badge-warning p-2">Pending</span>';
                }

                trainersHTML += `
                    <tr id="trainer-${uid}">
                        <td>${uid}</td>
                        <td>${trainer.name || ''}</td>
                        <td>${trainer.email || ''}</td>
                        <td>${trainer.phone || ''}</td>
                        <td>${trainer.category || 'N/A'}</td>
                        <td>${statusBadge}</td>
                        <td>
                            <button class="btn btn-danger btn-circle btn-sm" onClick="deleteTrainer('${uid}')"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-success btn-circle btn-sm" onClick="openEditForm('${uid}', '${trainer.name}', '${trainer.email}', '${trainer.phone}', '${trainer.status}', '${trainer.category || ''}')"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                `;
            });
            trainersListEl.innerHTML = trainersHTML;
        } catch (error) {
            showMessage("Error loading trainers: " + error.message, "danger");
        }
    };

    window.deleteTrainer = async function (uid) {
        if (confirm("Are you sure you want to delete this trainer?")) {
            try {
                await deleteDoc(doc(db, "trainer", uid));
                showMessage("Trainer deleted successfully!", "success");
                document.getElementById(`trainer-${uid}`).remove();
            } catch (error) {
                showMessage("Error deleting trainer: " + error.message, "danger");
            }
        }
    };

    window.openEditForm = function (uid, name, email, phone, status, category) {
        document.getElementById('editDocID').value = uid;
        document.getElementById('editFullName').value = name;
        document.getElementById('editEmail').value = email;
        document.getElementById('editPhoneNumber').value = phone;
        document.getElementById('editStatus').value = status;
        document.getElementById('editCategory').value = category;

        const editModal = new bootstrap.Modal(document.getElementById('editTrainerModal'));
        editModal.show();
    };

    document.getElementById('editTrainerForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        const uid = document.getElementById('editDocID').value;
        const name = document.getElementById('editFullName').value;
        const email = document.getElementById('editEmail').value;
        const phone = document.getElementById('editPhoneNumber').value;
        const status = document.getElementById('editStatus').value;
        const category = document.getElementById('editCategory').value;

        try {
            await updateDoc(doc(db, "trainer", uid), {
                name,
                email,
                phone,
                status,
                category
            });

            showMessage("Trainer updated successfully!", "success");

            const modalElement = document.getElementById('editTrainerModal');
            const modal = bootstrap.Modal.getInstance(modalElement);
            modal.hide();

            loadTrainers();
        } catch (error) {
            showMessage("Error updating trainer: " + error.message, "danger");
        }
    });

    function showMessage(message, type) {
        const box = document.getElementById('messageBox');
        box.className = `alert alert-${type}`;
        box.textContent = message;
        box.classList.remove('d-none');
    }

    window.onload = loadTrainers;
</script>

@endsection
