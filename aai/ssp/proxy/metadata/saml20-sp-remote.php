<?php
// Custom remote SP (managed from gui/metarefresh)
$metadata['http://localhost/custom-sp'] = [
    'entityid' => 'http://localhost/custom-sp',
    'contacts' => [
        [
            'contactType' => 'technical',
            'givenName' => 'Administrator',
            'emailAddress' => [
                'admin@example.com',
            ],
        ],
    ],
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'http://localhost:8082/simplesaml/module.php/saml/sp/saml2-acs.php/custom-sp',
            'index' => 0,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'http://localhost:8082/simplesaml/module.php/saml/sp/saml2-acs.php/custom-sp',
            'index' => 1,
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'http://localhost:8082/simplesaml/module.php/saml/sp/saml2-logout.php/custom-sp',
        ],
    ],
];