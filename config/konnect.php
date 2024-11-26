<?php
return [
    'api_key' => env('KONNECT_API_KEY'),
    'secret_key' => env('KONNECT_SECRET_KEY'),
    'sandbox_url' => env('KONNECT_SANDBOX_URL'),
    'live_url' => env('KONNECT_LIVE_URL'),
    'is_live' => false, // Set to true for live environment
];
