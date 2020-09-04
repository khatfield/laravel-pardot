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
