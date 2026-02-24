<?php
session_start();
session_unset();
session_destroy();

// Prevent caching issues
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Location: /novelnest/public/index.php");
exit;
?>
