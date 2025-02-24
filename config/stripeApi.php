<?php

$baseUrl = '/client-site';

require_once $_SERVER['DOCUMENT_ROOT'] . $baseUrl . '/vendor/autoload.php'; // Load Stripe SDK

// Load API keys securely
$stripe_keys = [
    'publishable_key' => 'pk_test_51QuctDKCx3klHNuFFYeXEYpWUcHbbtQpuoSCpcrN99BdGQEUSX1eijKQx45ZuT20x3MaP932ksTUoByhHd1WGZzr00vwdwsuFF', 
    'secret_key' => 'sk_test_51QuctDKCx3klHNuFSDXGD1SADW5Qk2w6MTTQ0MEXvVCx1MrORs7Wul3PMn2MVGAZobN7N8wjlcAYREH6n8EGIcya00uPOkrDWr'
];

// Do NOT set the API key here. Set it only in your actual API calls (e.g., in CheckoutController)
return $stripe_keys;
