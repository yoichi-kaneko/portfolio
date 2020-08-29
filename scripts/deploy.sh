#!/bin/bash
cd `dirname $0`/..
git pull
composer install --no-dev
npm install
npm run prod
php artisan migrate:refresh --force
php artisan db:seed --force
