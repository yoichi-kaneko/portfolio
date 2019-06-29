#!/bin/bash
cd `dirname $0`/..
sudo git pull
sudo composer update
sudo composer dump-autoload
php artisan migrate:refresh --force
php artisan db:seed --force
