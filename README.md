composer update
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan migrate
npm install
npm run build
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder
php artisan key:generate
php artisan config:cache
php artisan serve

php artisan make:model YourModelName -c -m