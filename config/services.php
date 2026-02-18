<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'ghl' => [
        'base_url' => env('GHL_BASE_URL', 'https://services.leadconnectorhq.com'),
        'access_token' => env('GHL_ACCESS_TOKEN'),
        'location_id' => env('GHL_LOCATION_ID'),
        'custom_fields' => [
            'appointment_date' => env('GHL_APPOINTMENT_DATE_ID', 'appointment_date'),
            'appointment_time' => env('GHL_APPOINTMENT_TIME_ID', 'appointment_time'),
            'selected_plan' => env('GHL_SELECTED_PLAN_ID', 'selected_plan'),
            'message' => env('GHL_MESSAGE_ID', 'message'),
        ],
        'links' => [
            'starter' => env('GHL_STARTER_LINK'),
            'growth' => env('GHL_GROWTH_LINK'),
            'pro' => env('GHL_PRO_LINK'),
        ],
    ],

];
