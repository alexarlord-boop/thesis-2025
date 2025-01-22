# Stage 1: Base setup with Debian, Apache, MySQL, and PHP
FROM debian:bookworm-slim as base

# Set environment variables
ARG PHP_VERSION=8.2
ARG SSP_VERSION=2.2.1

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
RUN wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v${SSP_VERSION}/simplesamlphp-${SSP_VERSION}-full.tar.gz \
    && tar xzf simplesamlphp-${SSP_VERSION}-full.tar.gz -C /var \
    && mv /var/simplesamlphp-${SSP_VERSION} /var/simplesamlphp \
    && rm simplesamlphp-${SSP_VERSION}-full.tar.gz

# Copy configuration files
COPY config/ /var/simplesamlphp/config/
COPY metadata/ /var/simplesamlphp/metadata/
COPY certs/ /var/simplesamlphp/cert/
COPY ssp.conf /etc/apache2/sites-available/ssp.conf

# Enable Apache site
RUN a2ensite ssp.conf


# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apachectl", "-D", "FOREGROUND"]