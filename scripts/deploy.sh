#!/bin/bash
git pull
php artisan migrate --force
php artisan db:seed --force