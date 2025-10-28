<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/client-site/vendor/autoload.php'; // Ensure Stripe is loaded

// Load Stripe API keys properly
$stripe_keys = require $_SERVER['DOCUMENT_ROOT'] . '/client-site/config/stripeApi.php';

// Ensure API key is set
if (!isset($stripe_keys['secret_key']) || empty($stripe_keys['secret_key'])) {
    error_log("Stripe API Key Missing: " . print_r($stripe_keys, true));
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Stripe API key is missing. Check stripeApi.php']);
    exit;
}
\Stripe\Stripe::setApiKey($stripe_keys['secret_key']);

class CheckoutController
{
    public function createSession()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Invalid request method']);
            exit;
        }

        $plan_id = $_POST['plan_id'] ?? null;

        if (!$plan_id) {
            http_response_code(400);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Plan ID is missing']);
            exit;
        }

        $plan_prices = [
            'free' => 'price_1QudbiKCx3klHNuFgCfTboc0',
            'pro' => 'price_1QudcuKCx3klHNuFyLyHetBo',
            'max' => 'price_1Qudi2KCx3klHNuFoVZK3so6',
            'yearly' => 'price_1Qudi2KCx3klHNuFgqcZEFsq',
        ];

        if (!isset($plan_prices[$plan_id])) {
            http_response_code(400);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Invalid Plan ID']);
            exit;
        }

        try {
            $checkout_session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price' => $plan_prices[$plan_id],
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => 'http://localhost/client-site/index.php?controller=Success&action=index&session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => 'http://localhost/client-site/view/pages/subscription.php',
            ]);

            header('Content-Type: application/json');
            echo json_encode(['id' => $checkout_session->id]);
            exit;
        } catch (\Stripe\Exception\ApiErrorException $e) {
            error_log("Stripe Checkout Error: " . $e->getMessage());
            http_response_code(500);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Failed to create checkout session: ' . $e->getMessage()]);
            exit;
        }
    }
}
