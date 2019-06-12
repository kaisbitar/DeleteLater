mysql --user="root" --password="" --execute="create schema triggerdb;"
composer install 
php artisan migrate
php artisan db:seed
npm install
php artisan serve
