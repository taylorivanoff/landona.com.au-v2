# Use a slim PHP image optimized for production
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk --no-cache add \
    git \
    curl \
    libpng \
    libpng-dev \
    libjpeg \
    libjpeg-turbo-dev \
    libxml2-dev \
    zip \
    unzip \
    oniguruma

# Install PHP extensions
RUN docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

# Create a non-root user
ARG user=taylor
ARG uid=1001
RUN adduser --disabled-password --gecos '' $user --uid $uid

# Set working directory
WORKDIR /var/www

# Change ownership of working directory to the non-root user
RUN chown -R $user:$user /var/www

# Switch to the non-root user
USER $user

# Copy only the necessary files
COPY --chown=$user:$user . /var/www

# Optimize Laravel for production
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set proper permissions
RUN chmod -R 755 storage && \
    chmod -R 755 bootstrap/cache

# Expose port 9000 to communicate with Nginx
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
