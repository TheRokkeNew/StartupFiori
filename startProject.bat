@echo off
php artisan route:clear
php artisan config:clear
php artisan cache:clear
php artisan migrate
php artisan storage:link
php artisan serve