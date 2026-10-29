FROM php:8.1-apache

# Install all required system packages and PHP extensions at once
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpq-dev \
    libgd-dev \
    libzip-dev \
    zlib1g-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install -j$(nproc) pdo pdo_mysql gd zip \
    && a2dismod mpm_event \
    && a2enmod mpm_prefork rewrite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# Copy project files
COPY . .

# Set document root to _sapolio/public
ENV APACHE_DOCUMENT_ROOT=/app/_sapolio/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Install dependencies
RUN cd _sapolio && composer install --no-dev --no-interaction --prefer-dist

# Create necessary directories
RUN mkdir -p /app/_sapolio/storage/framework/cache \
    && mkdir -p /app/_sapolio/storage/framework/sessions \
    && mkdir -p /app/_sapolio/storage/framework/views \
    && mkdir -p /app/_sapolio/storage/logs

# Set permissions
RUN chown -R www-data:www-data /app/_sapolio/storage /app/_sapolio/bootstrap/cache
RUN chmod -R 755 /app/_sapolio/storage /app/_sapolio/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
