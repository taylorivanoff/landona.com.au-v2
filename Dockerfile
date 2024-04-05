# Use an official PHP runtime as a base image
FROM php:8.2-fpm

# Create a new user with UID 1000 and GID 1000
RUN groupadd -g 1000 laravel && useradd -u 1000 -g laravel -m laravel

# Set the working directory in the container
WORKDIR /var/www

# Switch to the newly created user
USER laravel

# Copy composer.lock and composer.json
COPY --chown=laravel:laravel composer.lock composer.json /var/www/

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory contents to the working directory
COPY --chown=laravel:laravel . /var/www

# Install Laravel dependencies
RUN composer install --no-scripts --no-autoloader

# Set proper permissions for Laravel storage directory
RUN chown -R laravel:laravel storage
RUN chmod -R 775 storage

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
