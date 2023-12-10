FROM composer:2.6.5 as vendor_installer

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

FROM node:lts-alpine as asset_builder
WORKDIR /app
COPY package.json yarn.lock ./
RUN yarn
COPY /app ./app
COPY /resources ./resources
COPY postcss.config.js tailwind.config.js vite.config.js ./
RUN yarn build

FROM breakhack/roadrunner:2023.3.6-alpine3.18
COPY --from=vendor_installer /app/vendor/ /var/www/html/vendor/
COPY --from=asset_builder /app/public/build /var/www/html/public/build
COPY php.ini-production /usr/local/etc/php/php.ini
COPY --chown=1000:1000 . .
RUN php artisan storage:link

CMD php artisan migrate --force \
    && php artisan octane:start --host=0.0.0.0 --port=8000
