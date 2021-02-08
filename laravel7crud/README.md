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

## Config
```
# create model and migration
php artisan make:model Models/Blog -m

# create blog redquest
php artisan make:request BlogRequest

# link storage ke public dir
php artisan storage:link

```

## Result
1. Home
![Create-Form](https://github.com/rasdi28/Development/blob/master/laravel7crud/public/img/home.png = 400x250)


2. Registrasi
![Registrasi](https://github.com/rasdi28/Development/blob/master/laravel7crud/public/img/registrasi.png = 400x250)

3. Login
![login](https://github.com/rasdi28/Development/blob/master/laravel7crud/public/img/login.png = 400x250)

4. Blog
![Blog](https://github.com/rasdi28/Development/blob/master/laravel7crud/public/img/blog.png = 400x250)

5. Create Blog
![Create](https://github.com/rasdi28/Development/blob/master/laravel7crud/public/img/create.png = 400x250)

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

## Manajement Route Auth

jika kita ingin membuat halaman untuk bisa akses suatu page dengan cara login terlebih dahulu atau tidak bisa menggunakan perintah pada controller

```
public function __construct()
    {
        $this->middleware('auth')->except([ //tanda except adalah halaman yang bisa diakses tanpa login
            'index'
        ]);
    }

```

untuk memunculkan tombol atau button dengan ketentuan harus login terlebih dahulu jika ingin melihatnya maka bisa menggunakan perintah @auth dan diakhiri dengan @endauth

contoh

```
<div class="container">
    @auth 
        <a href="{{ route('blog.create') }}"class="btn btn-primary my-2">Add Blog</a>
    @endauth
</div>

```



___
# ERROR


1. masalah awal pertama kali setting/ install projek laravel dari repo orang lain

![error](https://github.com/rasdi28/Development/blob/master/Documentation/img/img1.PNG)

seringkali ketika kita memulai menginstall repo orang atau repo baru dilocal kita maka pesan itu akan muncul. untuk mengatasinya maka langkah pertama install composer
```
composer install
```
kemudian

```
php artisan migrate

```

kemudian
```
php artisan key:generate
```