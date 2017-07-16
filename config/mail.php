<?php

return [

    'driver' => 'smtp',
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', '587'),
    'from' => ['address' => 'yourusername', 'name' => 'yourname'],
    'encryption' => env('MAIL_ENCRYPTION','tls'),
    'username' => env('MAIL_USERNAME', 'username@gmail.com'),
    'password' => env('MAIL_PASSWORD', 'password'),
    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,

];
