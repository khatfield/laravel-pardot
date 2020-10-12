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

    'default' => env('PARDOT_DEFAULT_CONNECTION', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Pardot Debug Mode
    |--------------------------------------------------------------------------
    |
    | In debug mode, pardot will throw exceptions for many queries,
    | which would otherwise return null. This can be useful for debugging,
    | but difficult to work with in many scenarios.
    | e.x., 'getProspect' by email will return either null or an exception if
    | no Prospect has the given email.
    |
    */
    'debug' => env('PARDOT_DEBUG_MODE', false),

    /*
    |--------------------------------------------------------------------------
    | Pardot Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the pardot connections setup for your application.
    |
    */
    'connections' => [
      'default' => [
        'email'    => env('PARDOT_EMAIL'),
        'password' => env('PARDOT_PASSWORD'),
        'user_key' => env('PARDOT_USER_KEY')
      ],
    ],
  ];
