FROM php:apache

# Update package list
RUN apt-get update

# Install Git
RUN apt-get install -y git

# Install PostgreSQL client and its PHP extensions
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql