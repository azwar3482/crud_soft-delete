# crud_soft-delete
berjalan di php 8.1

## Instalasi
1. klik di terminal "git clone https://github.com/azwar3482/crud_soft-delete.git"
### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env.example lalu buat .env
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama-db
DB_USERNAME=root
DB_PASSWORD=
```

Generate key
```bash
php artisan key:generate
```
Menjalankan aplikasi
```bash
php artisan serve
```


Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan

php artisan db:seed
```


```bash
php artisan db:seed --class=IndoRegionSeeder 
```
