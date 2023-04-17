ARG PHP_EXTENSIONS="mysqli pdo_mysql gd"
ARG ADDITIONAL_PHP_EXTENSIONS="libfreetype6-dev libjpeg62-turbo-dev libpng-dev"

FROM thecodingmachine/php:8.1-v4-apache-node12

ENV PHP_EXTENSIONS="${PHP_EXTENSIONS}"
ENV ADDITIONAL_PHP_EXTENSIONS="${ADDITIONAL_PHP_EXTENSIONS}"

USER root

# Install required libraries for GD extension
RUN apt-get update && \
    apt-get install -y ${ADDITIONAL_PHP_EXTENSIONS}

# Configure and install GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd

USER docker

WORKDIR /workspace
