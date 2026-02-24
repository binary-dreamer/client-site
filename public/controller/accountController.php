<?php
$baseUrl = '/novelnest/public';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/novelnest/admin/model/userClass.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'Not authenticated.']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $userModel = new UserClass();
    $userId = $_SESSION['user_id'];
    
    // Validate that the request ID matches the session ID
    if (isset($_POST['id']) && $_POST['id'] != $userId) {
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized action.']);
        exit();
    }

    if ($_POST['action'] === 'update_profile') {
        $data = [
            'id' => $userId,
            'name' => $_POST['name'] ?? '',
            'email' => $_POST['email'] ?? '',
            'contact' => $_POST['contact'] ?? '',
            'gender' => $_POST['gender'] ?? '',
        ];

        $result = $userModel->updateUser($data);

        if ($result) {
            $_SESSION['user_name'] = $data['name'];
            $updatedUser = $userModel->getUserById($userId);
            if ($updatedUser && !empty($updatedUser['profile'])) {
                $_SESSION['user_profile_image'] = $updatedUser['profile'];
            }
            echo json_encode(['status' => 'success', 'message' => 'Profile updated successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update profile.']);
        }
        exit();
    }

    if ($_POST['action'] === 'update_password') {
        $currentPassword = $_POST['current_password'] ?? '';
        $newPassword = $_POST['new_password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        if ($newPassword !== $confirmPassword) {
            echo json_encode(['status' => 'error', 'message' => 'New passwords do not match.']);
            exit();
        }

        $user = $userModel->getUserById($userId);
        if (!$user || !password_verify($currentPassword, $user['password'])) {
            echo json_encode(['status' => 'error', 'message' => 'Incorrect current password.']);
            exit();
        }

        $data = [
            'id' => $userId,
            'name' => $user['name'],
            'email' => $user['email'],
            'contact' => $user['contact'],
            'gender' => $user['gender'],
            'password' => $newPassword
        ];
        
        $result = $userModel->updateUser($data);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Password updated successfully!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update password.']);
        }
        exit();
    }
}

echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
?>
