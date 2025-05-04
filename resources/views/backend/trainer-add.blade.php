@extends('backend.layouts.main')
@section('title', 'Add Trainer')
@section('main-container')

<div class="container-fluid">
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/admin/trainer') }}">
                <button class="btn btn-primary">Trainers List</button>
            </a>
        </div>
        <div class="card-body">
            <div id="messageBox" class="alert d-none" role="alert"></div>

            <form id="trainerForm">
                @csrf
                <div class="form-floating mb-3">
                    <label for="name">Full Name</label>
                    <input class="form-control" id="name" type="text" name="name" placeholder="Enter Full Name">
                </div>

                <div class="form-floating mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter Email">
                </div>

                <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password">
                </div>

                <div class="form-floating mb-3">
                    <label for="phone">Phone</label>
                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Enter Phone Number">
                </div>

                <!-- Status Dropdown -->
                <div class="form-floating mb-3">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>

                <!-- Category Dropdown -->
                <div class="form-floating mb-3">
                    <label for="category">Trainer Category</label>
                    <select class="form-control" id="category" name="category">
                        <option value="fitness">Fitness</option>
                        <option value="yoga">Yoga</option>
                        <option value="cardio">Cardio</option>
                        <option value="strength">Strength</option>
                        <option value="zumba">Zumba</option>
                    </select>
                </div>

                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button type="button" id="submitBtn" class="btn btn-primary btn-block" onclick="submitTrainer()">Add Trainer</button>
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
    import { getFirestore, doc, setDoc } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-firestore.js";
    import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-auth.js";

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

    window.submitTrainer = async function () {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const status = document.getElementById('status').value;
        const category = document.getElementById('category').value;

        const loadingEl = document.getElementById('loading');
        const messageBox = document.getElementById('messageBox');

        if (!name || !email || !password) {
            showMessage("Please fill in all required fields.", "danger");
            return;
        }

        loadingEl.classList.remove('d-none');
        document.getElementById('submitBtn').disabled = true;

        try {
            const userCredential = await createUserWithEmailAndPassword(auth, email, password);
            const uid = userCredential.user.uid;

            await setDoc(doc(db, "trainer", uid), {
                uid: uid,
                name: name,
                email: email,
                phone: phone,
                status: status,
                category: category,
                clients: [], // Save as empty array
                imageUrl: "",
                createdAt: new Date().toISOString()
            });

            showMessage("Trainer added successfully!", "success");
            document.getElementById('trainerForm').reset();
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
