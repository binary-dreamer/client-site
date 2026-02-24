<?php
session_start();
$baseUrl = '/novelnest/admin';


if (isset($_SESSION['admin_id'])) {
    // Admin is logged in
    $adminName = $_SESSION['admin_name'] ?? 'Admin';
    $adminProfileImage = $_SESSION['admin_profile_image'] ?? 'assets/images/default-avatar.jpg';
} elseif (isset($_SESSION['user_id'])) {
    // User is logged in
} else {
    header("Location: /novelnest/admin/view/admin/adminSigninForm.php");

    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl .'/view/layout/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl .'/view/dashboard/dashboard.php';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl .'/view/layout/footer.php';

?>



