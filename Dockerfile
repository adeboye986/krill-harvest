# syntax=docker/dockerfile:1.7

FROM dunglas/frankenphp:1.12.7-php8.5 AS php-base

RUN install-php-extensions \
    bcmath \
    intl \
    opcache \
    pcntl \
    pdo_mysql \
    pdo_pgsql \
    redis \
    zip \
    && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /app

FROM php-base AS php-dependencies

COPY --from=composer:2.9 /usr/bin/composer /usr/local/bin/composer
COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --no-scripts \
    --optimize-autoloader \
    --prefer-dist

COPY . .

RUN composer dump-autoload \
    --no-dev \
    --no-interaction \
    --classmap-authoritative

FROM node:24-bookworm-slim AS frontend

WORKDIR /app

COPY package.json package-lock.json .npmrc ./
RUN npm ci

COPY --from=php-dependencies /app/vendor ./vendor
COPY public ./public
COPY resources ./resources
COPY storage/framework/views ./storage/framework/views
COPY vite.config.js ./

RUN npm run build

FROM php-base AS production

ENV APP_ENV=production \
    APP_DEBUG=false \
    LOG_CHANNEL=stderr \
    LOG_LEVEL=info \
    RUN_MIGRATIONS=true \
    XDG_CONFIG_HOME=/tmp/caddy/config \
    XDG_DATA_HOME=/tmp/caddy/data

COPY --from=php-dependencies --chown=www-data:www-data /app /app
COPY --from=frontend --chown=www-data:www-data /app/public/build /app/public/build
COPY Caddyfile /etc/frankenphp/Caddyfile
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint

RUN chmod +x /usr/local/bin/docker-entrypoint \
    && mkdir -p "$XDG_CONFIG_HOME" "$XDG_DATA_HOME" \
    && touch database/database.sqlite \
    && ln -s /app/storage/app/public /app/public/storage \
    && chown -R www-data:www-data \
        bootstrap/cache \
        database \
        storage \
        "$XDG_CONFIG_HOME" \
        "$XDG_DATA_HOME"

USER www-data

EXPOSE 8080

HEALTHCHECK --interval=30s --timeout=5s --start-period=60s --retries=3 \
    CMD php -r 'exit(@file_get_contents("http://127.0.0.1:8080/up") === false ? 1 : 0);'

ENTRYPOINT ["docker-entrypoint"]
CMD ["frankenphp", "run", "--config", "/etc/frankenphp/Caddyfile"]
