# Laravel + Bootstrap + Simple CRUD

Repositori sederhana dari penerapan CRUD pada Framework Laravel menggunakan Eloquent ORM dan Query Builder yang dibawakan oleh [Blog Gampangan](http://www.gampangan.com). Tampilan menggunakan Bootstrap.

- [Eloquent ORM](https://www.gampangan.com/belajar-laravel-proses-crud-menggunakan-eloquent-orm)
- [Query Builder](https://www.gampangan.com/belajar-laravel-proses-crud-menggunakan-query-builder)

## Cara Menggunakan

Download atau clone repo ini.
```shell
$ git clone https://github.com/azharfrp/laravel-crud.git
```

Kemudian install dependency yang dibutuhkan oleh repo.
```shell
$ composer install
```

Buat app key, kemudian konfigurasi pada file '.env' dan kemudian lakukan migrasi.
```shell
# membuat file .env baru dari file .env.example - Linux
$ cp .env.example .env

# membuat file .env baru dari file .env.example - Windows
$ copy .env.example .env

# membuat app key
$ php artisan key:generate

# lakukan migrasi
$ php artisan migrate
```

Setelah itu, repo siap untuk digunakan.

### Catatan

Untuk informasi lebih lanjut mengenai Eloquent ORM dan juga Query Builder, silahkan baca lebih detail melalui dokumentasi resmi yang sudah dibuat oleh Laravel.

- [Eloquent ORM](https://laravel.com/docs/8.x/eloquent)
- [Query Builder](https://laravel.com/docs/8.x/queries)

Terima kasih sudah membaca. Semoga bermanfaat.
