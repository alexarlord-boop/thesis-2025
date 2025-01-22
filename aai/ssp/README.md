
# SSP AAI stack deployment

```sh
cd aai/ssp
```

```sh
docker build -t ssp-aai .
```
```sh
docker run -d -p 8080:80 \
-v /Users/rert0/Desktop/ti-wizard/aai/ssp/config/:/var/simplesamlphp/config \
-v /Users/rert0/Desktop/ti-wizard/aai/ssp/metadata/:/var/simplesamlphp/metadata \
-v /Users/rert0/Desktop/ti-wizard/aai/ssp/certs/:/var/simplesamlphp/cert \
ssp-aai
```



## Hosted SAML IDP side
### Certificates (RSA only)

```openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out example.org.crt -keyout example.org.pem``` -- certs will be valid for 10 years

```openssl req -newkey rsa:3072 -new -x509 -days 3652 -nodes -out localhost.crt -keyout localhost.pem -subj "/CN=localhost"
```

