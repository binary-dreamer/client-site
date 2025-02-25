<?php
$baseUrl = '/client-site';

// 1. Start session & Check Subscription **before any output**
session_start();
if (!isset($_SESSION['subscription_status']) || $_SESSION['subscription_status'] !== 'active') {
    header("Location: $baseUrl/index.php");
    exit;
}

// 2. Include Header AFTER session validation
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/view/layout/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>

    <!-- 3. Delay Redirect to Index Page (10 seconds) -->
    <!-- <script>
        setTimeout(function () {
            window.location.href = "<?= $baseUrl ?>/index.php"; 
        }, 10000); // Redirect after 10 seconds
    </script> -->

    <!-- 4. Ensure No Blur Effect -->
    <style>
        body {
            filter: none !important;
            opacity: 1 !important;
            pointer-events: auto !important;
            backdrop-filter: none !important;
        }
    </style>

    <!-- 5. Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- 6. Custom Styles -->
    <link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>/assets/css/style.css">
</head>
<body>

    <div class="container text-center mt-5">
        <h2 class="text-success">🎉 Payment Successful! 🎉</h2>
        <p class="lead">Thank you for subscribing. You can now access premium content.</p>
        <a href="<?= $baseUrl ?>/index.php" class="btn btn-primary mt-3">Go to Home</a>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/view/layout/footer.php'; ?> <!-- Load Footer -->

</body>
</html>
