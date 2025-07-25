# Filament Product App

A Laravel 12 + Filament project to manage products with categories, types, and colors.

## 🛠 Setup Instructions

```bash
# Clone the project
git clone https://github.com/YOUR_USERNAME/Filament-product-app.git
cd Filament-product-app

# Install dependencies
composer install

# Create .env file
cp .env.example .env

# Generate app key
php artisan key:generate

# Setup database
touch database/database.sqlite
php artisan migrate --seed

# Create Filament admin user
php artisan make:filament-user

# Run the app
php artisan serve
