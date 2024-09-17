FROM php:apache

# Update package list
RUN apt-get update

# Install Git and GnuPG
RUN apt-get install -y git gnupg2

# Install PostgreSQL client and its PHP extensions
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql