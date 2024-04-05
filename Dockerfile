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
    unzip \

# Install GD extension
RUN docker-php-ext-configure gd --with-freetype \
  && docker-php-ext-install gd pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Copy existing application directory contents to the working directory
COPY . /var/www

# Install Laravel dependencies
RUN composer install --no-scripts --no-autoloader

# Set proper permissions for Laravel storage directory
RUN chown -R laravel:laravel storage
RUN chmod -R 775 storage

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
