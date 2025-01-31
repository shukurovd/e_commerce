FROM php:8.2-fpm

# Laravel uchun zarur kengaytmalarni o'rnatish
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Composer-ni o'rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ARG WWWUSER=1000
ARG WWWGROUP=1000

#RUN addgroup -S ${WWWGROUP} && adduser -S ${WWWUSER} -G ${WWWGROUP}
# Гуруҳ ва фойдаланувчи яратиш
RUN addgroup --gid ${WWWGROUP} wwwgroup \
    && adduser --uid ${WWWUSER} --gid ${WWWGROUP} --disabled-password --gecos "" wwwuser


# Laravel иловасининг иш жойи
WORKDIR /var/www

# Илова файлларини нусхалаш
COPY . /var/www

# Файл тизимига эгаликни белгилаш
RUN chown -R wwwuser:wwwgroup /var/www

# Контейнердаги фойдаланувчини ўзгартириш
USER wwwuser