FROM php:8.1-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql \
    && a2enmod rewrite

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
RUN cd _sapolio && composer install --no-dev

# Set permissions
RUN chown -R www-data:www-data /app/_sapolio/storage /app/_sapolio/bootstrap/cache
RUN chmod -R 755 /app/_sapolio/storage /app/_sapolio/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
