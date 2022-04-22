<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'affair' => [
            'driver' => 'session',
            'provider' => 'affairs',
        ],
        'academic' => [
            'driver' => 'session',
            'provider' => 'academics',
        ],
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
        'registerlogin_m1' => [
            'driver' => 'session',
            'provider' => 'registerlogin_m1s',
        ],
        'registerlogin_m4' => [
            'driver' => 'session',
            'provider' => 'registerlogin_m4s',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
        'affairs' => [
            'driver' => 'eloquent',
            'model' => App\Affair::class,
        ],
        'academics' => [
            'driver' => 'eloquent',
            'model' => App\Academic::class,
        ],
        'students' => [
            'driver' => 'eloquent',
            'model' => App\Student::class,
        ],
        'registerlogin_m1s' => [
            'driver' => 'eloquent',
            'model' => App\RegisterloginM1::class,
        ],
        'registerlogin_m4s' => [
            'driver' => 'eloquent',
            'model' => App\RegisterloginM4::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 15,
        ],
        'affairs' => [
            'provider' => 'affairs',
            'table' => 'password_resets',
            'expire' => 15,
        ],
        'academics' => [
            'provider' => 'academics',
            'table' => 'password_resets',
            'expire' => 15,
        ],
        'students' => [
            'provider' => 'students',
            'table' => 'password_resets',
            'expire' => 15,
        ],
        'registerlogin_m1s' => [
            'provider' => 'registerlogin_m1s',
            'table' => 'password_resets',
            'expire' => 15,
        ],
        'registerlogin_m4s' => [
            'provider' => 'registerlogin_m4s',
            'table' => 'password_resets',
            'expire' => 15,
        ],
    ],

];
