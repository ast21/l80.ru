FROM composer:2.3.7 as vendor_installer

WORKDIR /app
COPY database/ database/
COPY artisan composer.json composer.lock ./
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist \
    --optimize-autoloader \
    --no-dev

FROM breakhack/roadrunner:2.9.1-alpine3.15
ARG LARAVEL_ENV_ENCRYPTION_KEY

COPY --from=vendor_installer /app/vendor/ /var/www/html/vendor/
COPY php.ini-production /usr/local/etc/php/php.ini
COPY --chown=1000:1000 . .
RUN php artisan env:decrypt --env=production --key="${LARAVEL_ENV_ENCRYPTION_KEY}"
RUN php artisan storage:link

CMD php artisan migrate --force && php artisan octane:start --host=0.0.0.0 --port=8000
