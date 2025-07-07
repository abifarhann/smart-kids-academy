echo "📦 Menjalankan composer install..."
composer install

echo "🧪 Menjalankan migrate (opsional)..."
php artisan migrate


echo "🔑 Generate config cache..."
php artisan key:generate
php artisan storage:link
php artisan db:seed TingkatPendidikanSeeder
php artisan db:seed AdminUserSeeder
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🔨 Build Vite assets..."
npm install
npm run build
