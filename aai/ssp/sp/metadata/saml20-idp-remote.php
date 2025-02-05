<?php
$metadata['http://localhost/proxy-idp'] = [
    'entityid' => 'http://localhost/proxy-idp',
    'contacts' => [
        [
            'contactType' => 'technical',
            'givenName' => 'Administrator',
            'emailAddress' => [
                'admin@example.com',
            ],
        ],
    ],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'http://localhost:8081/simplesaml/module.php/saml/idp/singleSignOnService',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'http://localhost:8081/simplesaml/module.php/saml/idp/singleLogout',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIECTCCAnGgAwIBAgIUUQQQsfgGUEfUpDchD8uHr/1Fw2YwDQYJKoZIhvcNAQELBQAwFDESMBAGA1UEAwwJbG9jYWxob3N0MB4XDTI1MDIwNTE1MjMzNVoXDTM1MDIwNTE1MjMzNVowFDESMBAGA1UEAwwJbG9jYWxob3N0MIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAo0ffXE8PRWo29jAp2ZLhLAKcqN0DQfHLdtFeo57wB0EDnbqxjNIr0Dx25bVAGaUEjwT2ZANe/N7woRpoKe6P510+sVASbl5EBgjmdtMfAUXqOY4c0aTJiBx9iFU6Nrq8dw6GMUgsBCLVjjB+f7qa/qYQBwRNrmxPlOxmjYbUQOSd6iOcUph4EddGJnpbqjWj5LPs2MH23U+ejLiyE3p16YHmzjUCCmYphr/HwvYQE4DykImWfHQO4g/XnH0PlVN9hEi8kG0KwY1Q2QqewmIXLxM5vC7yTepb/V4iO2RgBC6MikPYi78KZHjQfZ8zs7dUo454ppajsfnHBamVLhWsWtH2M+dRjlhirHZ67ootu/MnRdyOt0t7v/ocbc7CWWSNZQyntlJCWxNY/c1U6AHc3cR6VWVotyEgIRMu5c4o4ZBeDD14D7GLmflgVW+5GAgTZRlJcw+0G6r69JOJkFoK+ceptWx20D6aSsh1NNRAGTQsMv1b1w3FggNVRb/brzmpAgMBAAGjUzBRMB0GA1UdDgQWBBRbFicfWGq5S7jcFez0PwyX8TuGBTAfBgNVHSMEGDAWgBRbFicfWGq5S7jcFez0PwyX8TuGBTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQB5qKHMWK+vvim1deTmcBJCgAmZSI3a5xO8nlJN3DZfkmMwU+Fdd8rGcsR82ykk22zdXhBxlthMYcqjcy0TFcB7RoOvOcawhxbybFKbH3WtT67rvpRpxNOCJijThQlE3x8R3rFSPIMLP68LvrQw/Y3kvkRlaoiLCxZTY43RYJBfXWYL1l9GXLt2cUqfXIalbIpvGrvc4c6Yz0D5uX8fswPtpcjAbIrc/rXQPqXswcuFOOBsH88zq4YwkG1KCN5IkFjfhY9hgU1isGqETLHO5G76ZjGFOuwSHqnxGvFLN0PPAWzwCeZKWynJXaDOCb12YoaEUk7+4tK7UR+LpH/ZrEAzQFO0VPcCjeUpg7NXduKdT+BChNqLRLwS8aHkLrGVzWeWMmaBXade7ypRIQXFn9sitSljtIHo5atK3EpYmf5sBTg/Bm+MsV7jWB/BVXwbyWKrhpke7XSVRLxWMDPmBviN8CaPJfrdCp8zMjAu1Bp24yk++mHDMogmwQkceiXs16A=',
        ],
        [
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIECTCCAnGgAwIBAgIUUQQQsfgGUEfUpDchD8uHr/1Fw2YwDQYJKoZIhvcNAQELBQAwFDESMBAGA1UEAwwJbG9jYWxob3N0MB4XDTI1MDIwNTE1MjMzNVoXDTM1MDIwNTE1MjMzNVowFDESMBAGA1UEAwwJbG9jYWxob3N0MIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEAo0ffXE8PRWo29jAp2ZLhLAKcqN0DQfHLdtFeo57wB0EDnbqxjNIr0Dx25bVAGaUEjwT2ZANe/N7woRpoKe6P510+sVASbl5EBgjmdtMfAUXqOY4c0aTJiBx9iFU6Nrq8dw6GMUgsBCLVjjB+f7qa/qYQBwRNrmxPlOxmjYbUQOSd6iOcUph4EddGJnpbqjWj5LPs2MH23U+ejLiyE3p16YHmzjUCCmYphr/HwvYQE4DykImWfHQO4g/XnH0PlVN9hEi8kG0KwY1Q2QqewmIXLxM5vC7yTepb/V4iO2RgBC6MikPYi78KZHjQfZ8zs7dUo454ppajsfnHBamVLhWsWtH2M+dRjlhirHZ67ootu/MnRdyOt0t7v/ocbc7CWWSNZQyntlJCWxNY/c1U6AHc3cR6VWVotyEgIRMu5c4o4ZBeDD14D7GLmflgVW+5GAgTZRlJcw+0G6r69JOJkFoK+ceptWx20D6aSsh1NNRAGTQsMv1b1w3FggNVRb/brzmpAgMBAAGjUzBRMB0GA1UdDgQWBBRbFicfWGq5S7jcFez0PwyX8TuGBTAfBgNVHSMEGDAWgBRbFicfWGq5S7jcFez0PwyX8TuGBTAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBgQB5qKHMWK+vvim1deTmcBJCgAmZSI3a5xO8nlJN3DZfkmMwU+Fdd8rGcsR82ykk22zdXhBxlthMYcqjcy0TFcB7RoOvOcawhxbybFKbH3WtT67rvpRpxNOCJijThQlE3x8R3rFSPIMLP68LvrQw/Y3kvkRlaoiLCxZTY43RYJBfXWYL1l9GXLt2cUqfXIalbIpvGrvc4c6Yz0D5uX8fswPtpcjAbIrc/rXQPqXswcuFOOBsH88zq4YwkG1KCN5IkFjfhY9hgU1isGqETLHO5G76ZjGFOuwSHqnxGvFLN0PPAWzwCeZKWynJXaDOCb12YoaEUk7+4tK7UR+LpH/ZrEAzQFO0VPcCjeUpg7NXduKdT+BChNqLRLwS8aHkLrGVzWeWMmaBXade7ypRIQXFn9sitSljtIHo5atK3EpYmf5sBTg/Bm+MsV7jWB/BVXwbyWKrhpke7XSVRLxWMDPmBviN8CaPJfrdCp8zMjAu1Bp24yk++mHDMogmwQkceiXs16A=',
        ],
    ],
];