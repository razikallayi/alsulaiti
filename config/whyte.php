<?php

return [

    'project' => [
        'name' => env('APP_NAME','Whyte Creations'),
        'logo' => 'project/images/logo.png',
        'link' => '/',
        'theme-color'=> '#1b293f',
        'theme-font-color'=> '#FFF',
        'secondary-color'=> '#181818',
    ],

    'admin' => [
        'name' => 'Admin',
        'username' => 'admin',
        'password' => '123456',
        'email'    => 'info@slf-qa.com',
        'copyright' => '© 2016 '.env('APP_NAME','Whyte Creations').'. All Rights Reserved.',
        'copyright_link' => '/',
    ],

];
