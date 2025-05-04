@extends('backend.layouts.main')
@section('title', 'Subscription Plans')
@section('main-container')

<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/admin/subscriptionplan-add') }}">
                <button class="btn btn-primary">Back to Add Plan</button>
            </a>
        </div>
        <div class="card-body">
            <div id="messageBox" class="alert d-none" role="alert"></div>

            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Plan Name</th>
                            <th>Price ($)</th>
                            <th>Duration</th>
                        
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="plansList">
                        <!-- Plans data will be dynamically loaded here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Edit Plan Modal -->
<div class="modal" id="editPlanModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Subscription Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="editPlanForm">
                    <input type="hidden" id="editPlanID">

                    <div class="mb-3">
                        <label for="editPlanName" class="form-label">Plan Name</label>
                        <input type="text" class="form-control" id="editPlanName" placeholder="e.g. Basic Plan" required>
                    </div>

                    <div class="mb-3">
                        <label for="editPrice" class="form-label">Price ($)</label>
                        <input type="number" class="form-control" id="editPrice" placeholder="e.g. 19.99" required>
                    </div>

                    <div class="mb-3">
                        <label for="editDuration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="editDuration" placeholder="e.g. 1 Month" required>
                    </div>

                    <div class="mb-3">
                        <label for="editFeatures" class="form-label">Features (comma-separated)</label>
                        <textarea class="form-control" id="editFeatures" placeholder="e.g. 10 classes, 24/7 Support, Custom diet" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Firebase Script -->
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
    import { getFirestore, collection, getDocs, doc, deleteDoc, updateDoc } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-firestore.js";

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

    window.loadPlans = async function () {
        const plansListEl = document.getElementById('plansList');
        plansListEl.innerHTML = '<tr><td colspan="6" class="text-center">Loading subscription plans...</td></tr>';

        try {
            const querySnapshot = await getDocs(collection(db, "subscription_plans"));
            let html = '';
            querySnapshot.forEach((doc) => {
                const data = doc.data();
                const id = doc.id;

                

                html += `
                    <tr id="plan-${id}">
                        <td>${id}</td>
                        <td>${data.name || ''}</td>
                        <td>${data.price || ''}</td>
                        <td>${data.duration || ''}</td>
                       
                        <td>
                            <button class="btn btn-danger btn-sm" onClick="deletePlan('${id}')"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-success btn-sm" onClick="openEditForm('${id}', \`${data.name}\`, \`${data.price}\`, \`${data.duration}\`, \`${(data.features || []).map(f => Object.values(f).join(' - ')).join(', ')}\`)"><i class="fas fa-edit"></i></button>
                        </td>
                    </tr>
                `;
            });
            plansListEl.innerHTML = html;
        } catch (err) {
            showMessage("Error loading plans: " + err.message, "danger");
        }
    };

    window.deletePlan = async function (id) {
        if (confirm("Are you sure you want to delete this plan?")) {
            try {
                await deleteDoc(doc(db, "subscription_plans", id));
                showMessage("Plan deleted successfully!", "success");
                document.getElementById(`plan-${id}`).remove();
            } catch (error) {
                showMessage("Error deleting plan: " + error.message, "danger");
            }
        }
    };

    window.openEditForm = function (id, name, price, duration, featuresString) {
        document.getElementById('editPlanID').value = id;
        document.getElementById('editPlanName').value = name;
        document.getElementById('editPrice').value = price;
        document.getElementById('editDuration').value = duration;
      

        const editModal = new bootstrap.Modal(document.getElementById('editPlanModal'));
        editModal.show();
    };

    document.getElementById('editPlanForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const id = document.getElementById('editPlanID').value;
        const name = document.getElementById('editPlanName').value;
        const price = parseFloat(document.getElementById('editPrice').value);
        const duration = document.getElementById('editDuration').value;
        const featuresRaw = document.getElementById('editFeatures').value;

        const features = featuresRaw.split(',').map(item => {
            const trimmed = item.trim();
            return { feature: trimmed };
        });

        try {
            await updateDoc(doc(db, "subscription_plans", id), {
                name,
                price,
                duration,
                features
            });

            showMessage("Plan updated successfully!", "success");

            // Create a new Modal instance and hide it
            const modalElement = document.getElementById('editPlanModal');
            const modal = new bootstrap.Modal(modalElement); // Create a new instance of the modal
            modal.hide(); // Hide the modal

            loadPlans();
        } catch (error) {
            showMessage("Error updating plan: " + error.message, "danger");
        }
    });

    function showMessage(message, type) {
        const box = document.getElementById('messageBox');
        box.className = `alert alert-${type}`;
        box.textContent = message;
        box.classList.remove('d-none');
    }

    window.onload = loadPlans;
</script>

@endsection
