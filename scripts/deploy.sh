#!/bin/bash
cd `dirname $0`/..
sudo git pull
sudo composer install
php artisan migrate:refresh --force
php artisan db:seed --force
