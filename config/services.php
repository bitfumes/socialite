<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'twitter' => [
        'client_id' => '0RyoOK6D0g1dEW4pzNsYuAEQn',
        'client_secret' => '2Mh1l5NQ01pNhTesw8edj2OCEj2AQLMNoIOhadNcK8D43MIOxB',
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],
    'facebook' => [
        'client_id' => '740217916182375',
        'client_secret' => '34586b97e82f6d3201cdd37406429693',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '673196264301-ar7mqhrsqo5nl2o84v5ruf0ta8p2vmqg.apps.googleusercontent.com',
        'client_secret' => 'k_AaHAzJ3SdQZgx_ibFADdOD',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
