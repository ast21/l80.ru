FROM composer:2.6.5 as vendor_installer

WORKDIR /application
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
WORKDIR /application
COPY package.json yarn.lock ./
RUN yarn install
COPY postcss.config.js tailwind.config.js vite.config.js ./
COPY /resources ./resources
COPY /app ./application
RUN yarn build

FROM node:lts-alpine as achievement_builder
WORKDIR /application/app/Containers/Achievement/UI/WEB/Assets
COPY /app/Containers/Achievement/UI/WEB/Assets/package.json /app/Containers/Achievement/UI/WEB/Assets/yarn.lock ./
RUN yarn install
COPY /app/Containers/Achievement/UI/WEB/Assets/postcss.config.js  \
    /app/Containers/Achievement/UI/WEB/Assets/tailwind.config.js \
    /app/Containers/Achievement/UI/WEB/Assets/vite.config.js \
    ./
COPY /app/Containers/Achievement/UI/WEB /application/app/Containers/Achievement/UI/WEB
RUN yarn build

FROM breakhack/roadrunner:2023.3.6-alpine3.18
COPY --from=vendor_installer /application/vendor/ /var/www/html/vendor/
COPY --from=asset_builder /application/public/build /var/www/html/public/build
COPY --from=achievement_builder /application/public/build /var/www/html/public/build
COPY php.ini-production /usr/local/etc/php/php.ini
COPY --chown=1000:1000 . .
RUN php artisan storage:link

CMD php artisan migrate --force \
    && php artisan octane:start --host=0.0.0.0 --port=8000
