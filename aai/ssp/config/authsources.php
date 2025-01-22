<?php
$config = [
     // This is a authentication source which handles admin authentication.
     'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),
    
    'default-sp' => [
        'saml:SP',
    ],

    'example-userpass' => [
        'exampleauth:UserPass',
        'users' => [
            'student:studentpass' => [
                'uid' => ['student'],
                'eduPersonAffiliation' => ['member', 'student'],
            ],
            'employee:employeepass' => [
                'uid' => ['employee'],
                'eduPersonAffiliation' => ['member', 'employee'],
            ],
        ],
    ],
];
