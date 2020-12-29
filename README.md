# Разворачивание приложения

1) git clone https://github.com/k3kan/laravel-task.git
2) composer install
3) touch database/database.sqlite
4) touch .env

 В файле .env изменить указанную строку и удалить строку DB_DATABASE


DB_CONNECTION=sqlite



5) php artisan migrate
6) php artisan key:generate
7) php artisan serve
