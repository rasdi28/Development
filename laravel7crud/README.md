# INSTALASI LARAVEL
1. install dahulu Composer
2.  tuliskan perintah 
```
composer create-project --prefer-dist laravel/laravel:^7.0 namaprojek
```
3. install Autentification
```
composer require laravel/ui:^2.4
php artisan ui vue --auth
npm install && npm run dev

```
4. ubah file .env kemudian buat database dan ganti kemudian migrate laravel
```
php artisan migrate
```
5. Kemudian Run Laravel
```
php artisan serve 
```

## Menghilangkan Registrasi Pada tampilan Laravel
1. Buka Routes -> web.php
2. pada sintak 
```
Auth::route() //masukkan ['registrasi'=>false,'reset'=>false]
```
sehingga sintaknya seperti ini 
```
Auth::route(['registrasi'=>false,'reset'=>false]);
```
kemudian save dan run di terminal

```
php artisan route:list
```