FROM ubuntu:jammy
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Prague

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
    echo $TZ > /etc/timezone \
    && apt update \
    && apt install -y lsb-release gnupg2 ca-certificates apt-transport-https software-properties-common \
    && add-apt-repository -y ppa:ondrej/php && \
    apt install -y \
        supervisor \
        php8.2-cli \
        php8.2-common \
        php8.2-opcache \
        php8.2-readline \
        php8.2-xml \
        php8.2-zip \
        php8.2-intl \
        php8.2-gd \
        php8.2-mbstring \
        php8.2-mysql \
        php8.2-curl \
        php8.2-fpm && \
    mkdir /app && \
    mkdir -p /run/php/

COPY --from=caddy /usr/bin/caddy /usr/bin/caddy
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY docker/fpm-pool.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/Caddyfile /Caddyfile
COPY index.php /app/index.php

WORKDIR /app

EXPOSE 8000

CMD ["supervisord", "-n"]