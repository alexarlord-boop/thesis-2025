<?php
$config = [
     // This is a authentication source which handles admin authentication.
     'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),
    
    'custom-sp' => [
        'saml:SP',
        'entityID' => 'http://localhost/custom-sp',

        /*
         * The entity ID of the IdP this should SP should contact.
         * Can be NULL/unset, in which case the user will be shown a list of available IdPs.
         */
        'idp' => 'http://localhost/proxy-idp',
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
