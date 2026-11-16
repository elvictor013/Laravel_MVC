FROM php:8.3-fpm

# Dependências do sistema + extensões do PHP (PostgreSQL incluso)
RUN apt-get update && apt-get install -y \
        git unzip libpq-dev libzip-dev libonig-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip bcmath \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www