FROM php:8.0-apache

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql

# Настройка Apache
RUN a2enmod rewrite

# Копирование проекта в контейнер
COPY . /var/www/html/

# Установка прав на файлы
RUN chown -R www-data:www-data /var/www/html

# Установка рабочей директории
WORKDIR /var/www/html

# Открытие порта
EXPOSE 80

