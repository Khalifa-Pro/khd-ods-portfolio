# Stage 1 — Build Frontend using Node
FROM node:18 AS node-builder

WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install

COPY . .
RUN npm run build

# Stage 2 — PHP environment
FROM php:8.2-fpm

# Install system packages + PHP extensions
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy Laravel code
COPY . .

# Copy assets built by Vite
COPY --from=node-builder /app/public/build ./public/build

# Install backend dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel optimization
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Expose port
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
