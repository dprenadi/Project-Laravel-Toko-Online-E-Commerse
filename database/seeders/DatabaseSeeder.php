<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'roles' => 'ADMIN'
        // ]);
        // //1
        // User::create([
        //     'name' => 'Ramdan Fauzi',
        //     'email' => 'ramdan.f@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //2
        // User::create([
        //     'name' => 'Adam Ikhlal Fahrezi',
        //     'email' => 'adam@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //3
        // User::create([
        //     'name' => 'Wira Nugraha',
        //     'email' => 'wira00@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //4
        // User::create([
        //     'name' => 'Didi Junaedi',
        //     'email' => 'dijun@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //5
        // User::create([
        //     'name' => 'Alifia Afnan',
        //     'email' => 'Afnan.fia@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //6
        // User::create([
        //     'name' => 'Rizal Maulana',
        //     'email' => 'rizal.vml@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //7
        // User::create([
        //     'name' => 'Rahmawati Kartika Putri',
        //     'email' => 'rahkar@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //8
        // User::create([
        //     'name' => 'Chessa Sefa Aqila',
        //     'email' => 'chessa.sefa@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //9
        // User::create([
        //     'name' => 'Farah Shafira Firmanto',
        //     'email' => 'farah.sha@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        // //10
        // User::create([
        //     'name' => 'Fathur Rodzi Firmanto',
        //     'email' => 'fathur04@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        // User::factory(100)->create();

        // $this->call(LocationsTableSeeder::class);

        		Product::create([
            'name' => 'Apel Fuji',
            'slug' => 'apel-fuji',
            'users_id' => '1',
            'categories_id' => '7',
            'price' => '32950',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Apel Malang',
            'slug' => 'apel-malang',
            'users_id' => '1',
            'categories_id' => '7',
            'price' => '24000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Apel Wasington',
            'slug' => 'apel-wasington',
            'users_id' => '1',
            'categories_id' => '7',
            'price' => '23900',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        		Product::create([
            'name' => 'Nanas Lokal',
            'slug' => 'nanas-lokal',
            'users_id' => '1',
            'categories_id' => '8',
            'price' => '14000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
		Product::create([
            'name' => 'Nanas Madu Pemalang',
            'slug' => 'nanas-madu-pemalang',
            'users_id' => '1',
            'categories_id' => '8',
            'price' => '8000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Nanas Merah',
            'slug' => 'nanas-merah',
            'users_id' => '1',
            'categories_id' => '8',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Golden Melon',
            'slug' => 'golden-melon',
            'users_id' => '1',
            'categories_id' => '9',
            'price' => '85000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Melon Sky Rocket',
            'slug' => 'melon-sky-rocket',
            'users_id' => '1',
            'categories_id' => '9',
            'price' => '15000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
         Product::create([
            'name' => 'Melon Golden Langkawi',
            'slug' => 'melon-golden-langkawi',
            'users_id' => '1',
            'categories_id' => '9',
            'price' => '22000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Korean Melon',
            'slug' => 'korean-melon',
            'users_id' => '1',
            'categories_id' => '9',
            'price' => '12000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
    }
}
