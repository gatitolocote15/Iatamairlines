FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    git curl libpq-dev libgd-dev libzip-dev zlib1g-dev \
    libjpeg-dev libpng-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install pdo pdo_mysql gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .

RUN cd _sapolio && composer install --no-dev --no-interaction --prefer-dist

RUN mkdir -p _sapolio/storage/framework/cache \
    _sapolio/storage/framework/sessions \
    _sapolio/storage/framework/views \
    _sapolio/storage/logs \
    && chmod -R 777 _sapolio/storage _sapolio/bootstrap/cache

EXPOSE 8080

CMD sh -c "cd /app/_sapolio && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}"
