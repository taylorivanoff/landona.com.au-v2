# Use an official PHP runtime as a base image
FROM php:8.2-fpm

# Set the working directory in the container
WORKDIR /var/www

# Install sudo to enable running commands with elevated privileges
RUN apt-get update && apt-get install -y sudo

# Create a new user with UID 1000 and GID 1000
RUN groupadd -g 1000 laravel && useradd -u 1000 -g laravel -m laravel

# Add the newly created user to the sudo group
RUN usermod -aG sudo laravel

# Allow the laravel user to run commands with elevated privileges without password prompt
RUN echo "laravel ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/laravel

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
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd pdo_mysql

# Switch to the newly created user
USER laravel

# Install Composer
RUN sudo curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.lock and composer.json
COPY --chown=laravel:laravel composer.lock composer.json /var/www/

# Copy existing application directory contents to the working directory
COPY --chown=laravel:laravel . /var/www

# Install Laravel dependencies
RUN sudo composer install --no-scripts --no-autoloader

# Set proper permissions for Laravel storage directory
RUN chown -R laravel:laravel storage
RUN chmod -R 775 storage

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
