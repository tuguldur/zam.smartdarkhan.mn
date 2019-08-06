<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'mail.smartdarkhan.mn'),
    'port' => env('MAIL_PORT', 465),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'no-reply@smartdarkhan.mn'),
        'name' => env('MAIL_FROM_NAME', 'SmartDarkhan - Email'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('no-reply@smartdarkhan.mn'),
    'password' => env('Darkhan123'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
