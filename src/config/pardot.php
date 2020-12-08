<?php

  return [

    /*
    |--------------------------------------------------------------------------
    | Default Pardot Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the pardot connections below you wish
    | to use as your default connection for all pardot work.
    |
    */

    'default' => env('PARDOT_DEFAULT_CONNECTION', 'pardot'),

    /*
    |--------------------------------------------------------------------------
    | Pardot Debug Mode
    |--------------------------------------------------------------------------
    |
    | In debug mode, pardot will throw exceptions for many queries,
    | which would otherwise return null. This can be useful for debugging,
    | but difficult to work with in many scenarios.
    |
    */
    'debug' => env('PARDOT_DEBUG_MODE', false),

    /*
    |--------------------------------------------------------------------------
    | Pardot Exception Handler
    |--------------------------------------------------------------------------
    |
    | In debug mode by default, 'getProspect' by email will return an exception if
    | no Prospect has the given email. For this and other reasons, it may be useful to write
    | your own exception handler. You can specify a class to use below.
    |
    */
    'exception_handler' => env('PARDOT_EXCEPTION_HANDLER', \CyberDuck\Pardot\PardotExceptionHandler::class),

    /*
    |--------------------------------------------------------------------------
    | Pardot Connections
    |--------------------------------------------------------------------------
    |
    | Two examples of connections to pardot are displayed below. The "pardot" connection
    | uses the soon to be phased out (feb '21) standard pardot method,
    | while "sfoauth" uses the new Salesforce OAuth connection method.
    | It is highly recommended that you use the OAuth method.
    |
    */
    'connections' => [
      'pardot' => [
        'auth_type'               => env('PARDOT_AUTH_TYPE', 'PARDOT'),
        'email'                   => env('PARDOT_EMAIL'),
        'password'                => env('PARDOT_PASSWORD'),
        'user_key'                => env('PARDOT_USER_KEY'),
      ],
      'sfoauth' => [
        'auth_type'               => env('PARDOT_AUTH_TYPE', 'OAUTH'),
        'email'                   => env('PARDOT_EMAIL'),
        'password'                => env('PARDOT_PASSWORD'),
        'user_api_security_token' => env('PARDOT_USER_API_SECURITY_TOKEN'),
        'business_unit_id'        => env('PARDOT_BUSINESS_UNIT_ID'),
        'consumer_key'            => env('PARDOT_CONSUMER_KEY'),
        'consumer_secret'         => env('PARDOT_CONSUMER_SECRET')
      ],

      //...

    ],
  ];
