# Разворачивание приложения

1) git clone https://github.com/k3kan/laravel-task.git
2) composer install
3) touch database/database.sqlite
4) touch .env
# Добавить следующий код в .env

PP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:DzVUPX9VhPiNABBKV9/3yGhYfp1qWby7S6vqw02R2QI=
APP_DEBUG=true
APP_URL=http://localhost


LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120


5) php artisan migrate
6) php artisan key:generate
7) php artisan serve
