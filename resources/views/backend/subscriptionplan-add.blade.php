@extends('backend.layouts.main')
@section('title', 'Add Subscription Plan')
@section('main-container')

<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/admin/subscriptionplan') }}">
                <button class="btn btn-primary">Subscription Plans List</button>
            </a>
        </div>
        <div class="card-body">
            <div id="messageBox" class="alert d-none" role="alert"></div>

            <form id="planForm">
                @csrf

                <div class="form-floating mb-3">
                    <label for="planName">Plan Name</label>
                    <input class="form-control" id="planName" type="text" name="planName" placeholder="e.g., Basic, Premium, Gold">
                </div>

                <div class="form-floating mb-3">
                    <label for="duration">Duration (in days)</label>
                    <input class="form-control" id="duration" type="number" name="duration" placeholder="e.g., 30, 90, 365">
                </div>

                <div class="form-floating mb-3">
                    <label for="price">Price (PKR)</label>
                    <input class="form-control" id="price" type="number" name="price" placeholder="Enter subscription price">
                </div>

                <div class="form-floating mb-3">
                    <label for="features">Features (comma-separated)</label>
                    <input class="form-control" id="features" type="text" name="features" placeholder="e.g., Gym access, Yoga classes, Personal trainer">
                </div>

                <div class="form-floating mb-3">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="coming_soon">Coming Soon</option>
                    </select>
                </div>

                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button type="button" id="submitBtn" class="btn btn-primary btn-block" onclick="submitPlan()">Add Plan</button>
                        <div id="loading" class="mt-2 text-center text-info d-none">Uploading, please wait...</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Firebase Integration -->
<script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
    import { getFirestore, doc, setDoc, collection, addDoc } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-firestore.js";

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

    window.submitPlan = async function () {
        const planName = document.getElementById('planName').value.trim();
        const duration = document.getElementById('duration').value.trim();
        const price = document.getElementById('price').value.trim();
        const features = document.getElementById('features').value.trim();
        const status = document.getElementById('status').value;

        const loadingEl = document.getElementById('loading');
        const messageBox = document.getElementById('messageBox');

        if (!planName || !duration || !price) {
            showMessage("Please fill in all required fields.", "danger");
            return;
        }

        loadingEl.classList.remove('d-none');
        document.getElementById('submitBtn').disabled = true;

        try {
            await addDoc(collection(db, "subscription_plans"), {
                name: planName,
                duration: parseInt(duration),
                price: parseFloat(price),
                features: features.split(',').map(f => f.trim()),
                status: status,
                createdAt: new Date().toISOString()
            });

            showMessage("Subscription Plan added successfully!", "success");
            document.getElementById('planForm').reset();
        } catch (error) {
            showMessage("Error: " + error.message, "danger");
        } finally {
            loadingEl.classList.add('d-none');
            document.getElementById('submitBtn').disabled = false;
        }
    }

    function showMessage(message, type) {
        const box = document.getElementById('messageBox');
        box.className = `alert alert-${type}`;
        box.textContent = message;
        box.classList.remove('d-none');
    }
</script>

@endsection
