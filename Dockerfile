FROM php:apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Update package list
RUN apt-get update

# Install Git and GnuPG
RUN apt-get install -y git gnupg2

# Install PostgreSQL client and its PHP extensions
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY ./www /var/www/html/
