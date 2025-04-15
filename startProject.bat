@echo off
php artisan route:clear
php artisan config:clear
php artisan cache:clear
php artisan migrate
php artisan serve