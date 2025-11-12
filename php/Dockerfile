FROM php:8.2-fpm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install cachetool
RUN curl -sLo /usr/local/bin/cachetool https://github.com/gordalina/cachetool/releases/latest/download/cachetool.phar && \
    chmod +x /usr/local/bin/cachetool

# Set working directory
WORKDIR /var/www/html

CMD ["php-fpm"]
