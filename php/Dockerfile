# Use an official PHP Apache runtime
FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install PostgreSQL client and its PHP extensions
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Install MySQLi extension
RUN docker-php-ext-install mysqli

# Copy the PHP code files into the container at /var/www/html
COPY ./ /html
