# SSP AAI stack deployment
This is a simple deployment of a SAML IDP-SP (proxy). The deployment is done using docker, all necessary configurations are included in the repository under ```ssp``` folder.

```sh
cd aai/ssp
```

```sh
docker build -t ssp-aai .
```

```sh
docker run -d -p 8080:80 \
-v ./config/:/var/simplesamlphp/config \
-v ./metadata/:/var/simplesamlphp/metadata \
-v ./certs/:/var/simplesamlphp/cert \
ssp-aai
```



## Hosted SAML IDP side
### Certificates (RSA only)
The IdP needs a certificate to sign its SAML assertions with.

```openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out localhost.crt -keyout localhost.pem -subj "/CN=localhost"```

