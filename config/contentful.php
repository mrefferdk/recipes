<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contentful client
    |--------------------------------------------------------------------------
    |
    | This file contains configurations for setting up contentful-client with Laravel
    |
    */

    'content_preview_token' => env('CONTENTFUL_TOKEN_CONTENT_PREVIEW'),
    'content_delivery_token' => env('CONTENTFUL_TOKEN_CONTENT_DELIVERY'),
    'content_management_token' => env('CONTENTFUL_TOKEN_CONTENT_MANAGEMENT'),
    'default_space_id' => env('CONTENTFUL_DEFAULT_SPACE_ID'),
    'environment_id' => env('CONTENTFUL_DEFAULT_ENVIRONMENT_ID'),

];
