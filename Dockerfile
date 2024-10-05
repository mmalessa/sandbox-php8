FROM php:8.4-rc-cli-alpine3.20 AS local
ARG COMPOSER_VERSION=2.8.1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=$COMPOSER_VERSION
RUN apk update && apk add git zip vim
RUN pecl config-set php_ini /usr/local/etc/php/conf.d/over.ini
ARG UID
ARG USER
RUN adduser -D -u ${UID} ${USER}
USER ${USER}
WORKDIR "/app"
