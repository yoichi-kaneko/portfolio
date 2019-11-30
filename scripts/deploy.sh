#!/bin/bash
cd `dirname $0`/..
sudo git pull
COMPOSER_PATH=`type composer`
sudo $COMPOSER_PATH install
php artisan migrate:refresh --force
php artisan db:seed --force
