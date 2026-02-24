<?php
$baseUrl = '/novelnest/public';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: /novelnest/admin/view/admin/adminSigninForm.php");
    exit();
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/novelnest/admin/model/userClass.php';
$userModel = new UserClass();
$user = $userModel->getUserById($_SESSION['user_id']);
$subscription = $userModel->getUserSubscription($user['email'] ?? '');

// Restore the frontend baseUrl after userClass.php overrides it
$baseUrl = '/novelnest/public';

require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/header.php";
?>

<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
    style="background-image: url('<?= $baseUrl ?>/assets/images/banner_2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 65px;">
    <h1 class="text-primary" style="color: #ffc107;">Account Settings</h1>
    <h5 class="mb-4">Manage your Account & Subscription</h5>
</div>

<section class="padding-large">
    <style>
        .account-settings-nav .nav-pills .nav-link.active, 
        .account-settings-nav .nav-pills .show > .nav-link {
            background-color: #00daaa !important;
            color: white !important;
        }
        .account-settings-nav .nav-link {
            color: #333;
        }
        .account-settings-nav .nav-link:hover {
            color: #00daaa;
        }
    </style>
    <div class="container account-settings-nav">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 mb-4">
                <div class="nav flex-column nav-pills shadow-sm p-3 bg-white rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="border: 1px solid #E3E3E3;">
                    <button class="nav-link active text-start mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true" style="font-weight: 600;">Profile Information</button>
                    <button class="nav-link text-start mb-2" id="v-pills-security-tab" data-bs-toggle="pill" data-bs-target="#v-pills-security" type="button" role="tab" aria-controls="v-pills-security" aria-selected="false" style="font-weight: 600;">Change Password</button>
                    <button class="nav-link text-start" id="v-pills-subscription-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subscription" type="button" role="tab" aria-controls="v-pills-subscription" aria-selected="false" style="font-weight: 600;">Subscription</button>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-md-9">
                <div class="tab-content shadow-sm p-4 bg-white rounded" id="v-pills-tabContent" style="border: 1px solid #E3E3E3; min-height: 400px;">
                    
                    <!-- Alert Placeholder -->
                    <div id="settings-alert" class="alert d-none" role="alert"></div>

                    <!-- Profile Tab -->
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h3 class="mb-4">Profile Information</h3>
                        <form id="profile-form" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="update_profile">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">
                            
                            <div class="mb-4 text-center">
                                <img src="<?= !empty($user['profile']) ? htmlspecialchars($user['profile']) : $baseUrl . '/assets/images/default-avatar.jpg' ?>" alt="Profile" class="rounded-circle mb-3" width="120" height="120" id="profile-preview" style="object-fit: cover; border: 3px solid #E3E3E3;">
                                <div>
                                    <label for="profile_image" class="btn btn-sm btn-outline-primary" style="font-size: 14px; padding: 5px 15px;">Change Picture</label>
                                    <input type="file" id="profile_image" name="photo" class="d-none" accept="image/*" onchange="previewImage(event)">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Full Name</label>
                                    <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Email Address</label>
                                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Contact Number</label>
                                    <input type="tel" class="form-control" name="contact" value="<?= htmlspecialchars($user['contact'] ?? '') ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Gender</label>
                                    <select class="form-select w-100" name="gender">
                                        <option value="male" <?= ($user['gender'] ?? '') === 'male' ? 'selected' : '' ?>>Male</option>
                                        <option value="female" <?= ($user['gender'] ?? '') === 'female' ? 'selected' : '' ?>>Female</option>
                                        <option value="other" <?= ($user['gender'] ?? '') === 'other' ? 'selected' : '' ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn mt-3" style="font-size: 16px;">Save Changes</button>
                        </form>
                    </div>

                    <!-- Security Tab -->
                    <div class="tab-pane fade" id="v-pills-security" role="tabpanel" aria-labelledby="v-pills-security-tab">
                        <h3 class="mb-4">Change Password</h3>
                        <form id="password-form">
                            <input type="hidden" name="action" value="update_password">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Current Password</label>
                                <input type="password" class="form-control" name="current_password" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">New Password</label>
                                <input type="password" class="form-control" name="new_password" required minlength="6">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Confirm New Password</label>
                                <input type="password" class="form-control" name="confirm_password" required minlength="6">
                            </div>
                            <button type="submit" class="btn mt-2" style="font-size: 16px;">Update Password</button>
                        </form>
                    </div>

                    <!-- Subscription Tab -->
                    <div class="tab-pane fade" id="v-pills-subscription" role="tabpanel" aria-labelledby="v-pills-subscription-tab">
                        <h3 class="mb-4">Subscription Details</h3>
                        <?php if ($subscription): ?>
                            <!-- Active Premium Plan -->
                            <div class="alert text-center p-5" style="border: 1px solid #00daaa; border-left: 5px solid #00daaa; border-radius: 8px; background-color: #f7fffd;">
                                <h4 class="mb-3" style="color: #00daaa;"><i class="fas fa-crown me-2"></i> <?= htmlspecialchars($subscription['plan_name']) ?></h4>
                                <p class="mb-2" style="font-size: 16px;">You are currently enjoying premium features.</p>
                                <p class="mb-4 text-muted">Active until: <strong><?= date('F j, Y', strtotime($subscription['end_date'])) ?></strong> | Price: ₹<?= htmlspecialchars($subscription['plan_price']) ?></p>
                                <a href="<?= $baseUrl ?>/view/pages/subscription.php" class="btn" style="background-color: #00daaa; color: white;">View Other Plans</a>
                            </div>
                        <?php else: ?>
                            <!-- Default Free Plan -->
                            <div class="alert text-center p-5" style="border: 1px solid #E3E3E3; border-radius: 8px; background-color: #fcfcfc;">
                                <h4 class="mb-3 text-secondary text-dark">Book Explorer (FREE)</h4>
                                <p class="mb-4" style="font-size: 16px;">You are on the free plan. Read unlimited books and listen to audiobooks with a premium subscription.</p>
                                <a href="<?= $baseUrl ?>/view/pages/subscription.php" class="btn" style="background-color: #00daaa; color: white;">Upgrade Plan</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Preview image before upload
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('profile-preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    // Handle AJAX forms
    document.addEventListener('DOMContentLoaded', function() {
        const profileForm = document.getElementById('profile-form');
        const passwordForm = document.getElementById('password-form');
        const alertBox = document.getElementById('settings-alert');

        function showAlert(message, type) {
            alertBox.classList.remove('d-none', 'alert-success', 'alert-danger');
            alertBox.classList.add('alert-' + type);
            alertBox.innerHTML = message;
            window.scrollTo({ top: document.querySelector('.tab-content').offsetTop - 100, behavior: 'smooth' });
            
            setTimeout(() => {
                alertBox.classList.add('d-none');
            }, 5000);
        }

        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(profileForm);
            
            fetch('/novelnest/public/controller/accountController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                showAlert(data.message, data.status === 'success' ? 'success' : 'danger');
                if(data.status === 'success') {
                    // Refresh header name optionally
                    setTimeout(() => location.reload(), 1500);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('An unexpected error occurred.', 'danger');
            });
        });

        passwordForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(passwordForm);

            if(formData.get('new_password') !== formData.get('confirm_password')) {
                showAlert('New passwords do not match!', 'danger');
                return;
            }

            fetch('/novelnest/public/controller/accountController.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                showAlert(data.message, data.status === 'success' ? 'success' : 'danger');
                if(data.status === 'success') {
                    passwordForm.reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('An unexpected error occurred.', 'danger');
            });
        });
    });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . "/view/layout/footer.php"; ?>
