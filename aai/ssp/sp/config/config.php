<?php
$config = [
    'baseurlpath' => 'simplesaml/',
    'certdir' => 'cert/',
    'loggingdir' => 'log/',
    'logging.handler' => 'file',
    'datadir' => 'data/',
    'tempdir' => 'temp/',
    'technicalcontact_name' => 'Administrator',
    'technicalcontact_email' => 'admin@example.com',
    'timezone' => 'UTC',
    'secretsalt' => 'random-secret-salt',
    'auth.adminpassword' => 'admin',
    // 'enable.saml20-idp' => true,
    'language.i18n.backend' => 'gettext/gettext',
    'usenewui' => true,
    'module.enable' => array(
        'exampleauth' => true,
        'saml' => true,
        'admin' => true,
        'core' => null,
        'cron' => true,
        'metarefresh' => true,
        'oidc' => true,
        'mymodule' => true,
    ),
   
    'theme.use' => 'mymodule:fancytheme',
];
