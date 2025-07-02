# Koristimo PHP 8.1 sa FPM i potrebnim ekstenzijama
FROM php:8.1-fpm

# Instaliramo system dependencies potrebne za Laravel i Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    nodejs npm \
    && docker-php-ext-install zip mbstring pdo_mysql curl xml

# Instaliramo Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Setujemo radni direktorijum unutar container-a
WORKDIR /var/www

# Kopiramo sav kod u container
COPY . .

# Instaliramo PHP dependencies preko Composer-a
RUN composer install --no-dev --optimize-autoloader

# Instaliramo Node.js dependencies i pravimo build frontenda
RUN npm install && npm run build

# Keširamo konfiguraciju Laravel aplikacije
RUN php artisan config:cache

# Izlažemo port 10000
EXPOSE 10000

# Startujemo PHP server na svim interfejsima, port 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
