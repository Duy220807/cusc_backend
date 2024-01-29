## Cài nodejs, xammp và composer, laravel
## Kiểm tra 
> php -v
## Chạy project
### 1. Vào đường dẫn project
> tạo file .env
>> copy .env.example qua .env
### 2. Thêm modules
> npm install
### 3. Cập nhật package.json
> composer update
### 4. Thêm migration 
> php artisan migrate
### 5. Thêm seeder
>php artisan db:seed DatabaseSeeder
### 6. Chạy serve
> php artisan serve


