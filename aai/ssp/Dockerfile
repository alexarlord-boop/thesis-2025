# Stage 1: Base setup with Debian, Apache, MySQL, and PHP
FROM debian:bookworm-slim as base

# Install Apache, MySQL, PHP, and other dependencies
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    wget \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Stage 2: Setup SimpleSAMLphp
FROM base as simplesamlphp

# Download and install SimpleSAMLphp
RUN wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v1.19.0/simplesamlphp-1.19.0.tar.gz \
    && tar xzf simplesamlphp-1.19.0.tar.gz -C /var \
    && mv /var/simplesamlphp-1.19.0 /var/simplesamlphp \
    && rm simplesamlphp-1.19.0.tar.gz

# Copy configuration files
COPY config/ /var/simplesamlphp/config/
COPY metadata/ /var/simplesamlphp/metadata/
COPY certs/ /var/simplesamlphp/cert/

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apachectl", "-D", "FOREGROUND"]