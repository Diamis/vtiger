FROM php:7.2-apache

RUN apt-get update && \
    apt-get install -y \
        libc-client-dev libkrb5-dev && \
    rm -r /var/lib/apt/lists/*

RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install -j$(nproc) imap && \
    docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

WORKDIR /var/www/html