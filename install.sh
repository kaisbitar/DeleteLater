mysql --user="root" --password="" --database="triggerdb" --execute="create schema triggerdb;"
composer install 
php artisan migrate
php artisan db:seed
php artisan serve
