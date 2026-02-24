<?php
session_start();
// Destroy session and all associated data
session_unset();
session_destroy();

// Redirect to the login page
header('Location: /novelnest/admin/view/admin/adminSigninForm.php');
exit;
?>



