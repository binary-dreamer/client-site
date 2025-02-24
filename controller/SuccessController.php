<?php
$baseUrl = '/client-site';
require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/config/stripeApi.php';

class SuccessController
{
    public function index()
    {
        if (!isset($_GET['session_id'])) {
            die("Invalid request. No session ID provided.");
        }

        $session_id = $_GET['session_id'];

        $stripe_keys = require $_SERVER['DOCUMENT_ROOT'] . '/client-site/config/stripeApi.php';
        \Stripe\Stripe::setApiKey($stripe_keys['secret_key']);

        try {
            $session = \Stripe\Checkout\Session::retrieve($session_id);
            $_SESSION['subscription_status'] = 'active';
            $_SESSION['stripe_customer_id'] = $session->customer;

            header("Location: /client-site/view/pages/success.php");
            exit;
        } catch (\Stripe\Exception\ApiErrorException $e) {
            error_log("Stripe API Error: " . $e->getMessage());
            die("Error retrieving payment details.");
        }
    }
}
?>
