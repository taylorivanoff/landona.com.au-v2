# Use an official PHP runtime as a base image
FROM php:8.2-fpm

# Set the working directory in the container
WORKDIR /var/www

# Install sudo to enable running commands with elevated privileges
RUN apt-get update && apt-get install -y sudo

# Install required packages
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Configure GD extension with FreeType support
RUN docker-php-ext-configure gd --with-freetype

# Install GD and pdo_mysql extensions
RUN docker-php-ext-install gd pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Copy existing application directory contents to the working directory
COPY . /var/www

# Install Laravel dependencies
RUN composer install --no-scripts --no-autoloader

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

RUN php artisan migrate
