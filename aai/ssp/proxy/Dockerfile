# Stage 1: Base setup with Debian, Apache, MySQL, and PHP
FROM debian:bookworm-slim as base

# Set environment variables
ARG PHP_VERSION=8.2
ARG SSP_VERSION=2.3.5

# Install Apache, MySQL, PHP, and other dependencies
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    php-xml \
    php-curl \
    wget \
    unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Stage 2: Setup SimpleSAMLphp
FROM base as simplesamlphp

# Download and install SimpleSAMLphp
RUN wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v${SSP_VERSION}/simplesamlphp-${SSP_VERSION}-full.tar.gz \
    && tar xzf simplesamlphp-${SSP_VERSION}-full.tar.gz -C /var \
    && mv /var/simplesamlphp-${SSP_VERSION} /var/simplesamlphp \
    && rm simplesamlphp-${SSP_VERSION}-full.tar.gz

# Create temp and log directories
RUN mkdir -p /var/simplesamlphp/temp /var/simplesamlphp/log \
    && chown -R www-data:www-data /var/simplesamlphp/temp /var/simplesamlphp/log \
    && chmod -R 775 /var/simplesamlphp/temp /var/simplesamlphp/log

# Copy configuration files
COPY config/ /var/simplesamlphp/config/
COPY metadata/ /var/simplesamlphp/metadata/
COPY certs/ /var/simplesamlphp/cert/
COPY ssp.conf /etc/apache2/sites-available/ssp.conf
COPY modules/ /var/simplesamlphp/modules/

WORKDIR /var/simplesamlphp/cert
RUN chown www-data:www-data localhost.pem 

# Enable Apache site
RUN a2ensite ssp.conf


# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apachectl", "-D", "FOREGROUND"]