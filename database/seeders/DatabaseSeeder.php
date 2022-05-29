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

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'roles' => 'ADMIN'
        ]);
        //1
        User::create([
            'name' => 'Ramdan Fauzi',
            'email' => 'ramdan.f@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //2
        User::create([
            'name' => 'Adam Ikhlal Fahrezi',
            'email' => 'adam@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //3
        User::create([
            'name' => 'Wira Nugraha',
            'email' => 'wira00@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //4
        User::create([
            'name' => 'Didi Junaedi',
            'email' => 'dijun@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //5
        User::create([
            'name' => 'Alifia Afnan',
            'email' => 'Afnan.fia@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //6
        User::create([
            'name' => 'Rizal Maulana',
            'email' => 'rizal.vml@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //7
        User::create([
            'name' => 'Rahmawati Kartika Putri',
            'email' => 'rahkar@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //8
        User::create([
            'name' => 'Chessa Sefa Aqila',
            'email' => 'chessa.sefa@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //9
        User::create([
            'name' => 'Farah Shafira Firmanto',
            'email' => 'farah.sha@gmail.com',
            'password' => bcrypt('123456')
        ]);
        //10
        User::create([
            'name' => 'Fathur Rodzi Firmanto',
            'email' => 'fathur04@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::factory(100)->create();

        $this->call(LocationsTableSeeder::class);

        Product::create([
            'name' => 'Mangga Madu',
            'slug' => 'mangga-madu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Mangga Gedong Gincu',
            'slug' => 'mangga-gedong-gincu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        	Product::create([
            'name' => 'Anggur Jupiter',
            'slug' => 'anggur-jupiter',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '80000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
		Product::create([
            'name' => 'Anggur Ninel',
            'slug' => 'anggur-ninel',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '90000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Mangga Indramayu',
            'slug' => 'mangga-indramayu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Mangga Alpukat',
            'slug' => 'mangga-alpukat',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Mangga Golek',
            'slug' => 'mangga-golek',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Mangga Lalijiwo',
            'slug' => 'mangga-lalijiwo',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        
        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Ambon',
            'slug' => 'pisang-ambon',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Anggur Black Phanter',
            'slug' => 'anggur-black-phanter',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '100000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Julian',
            'slug' => 'anggur-julian',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '90000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Harold',
            'slug' => 'anggur-harold',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '80000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Victor',
            'slug' => 'anggur-victor',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '80000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Durian Petruk',
            'slug' => 'durian-petruk',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '85000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Durian Matahari',
            'slug' => 'durian-matahari',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '30000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Durian Mimang',
            'slug' => 'durian-mimang',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '25000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Dixon',
            'slug' => 'anggur-dixon',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '80000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Banana',
            'slug' => 'anggur-banana',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '50000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Anggur Taldun',
            'slug' => 'anggur-taldun',
            'users_id' => '1',
            'categories_id' => '4',
            'price' => '40000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Tanduk',
            'slug' => 'pisang-tanduk',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Kepok',
            'slug' => 'pisang-kepok',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Uli',
            'slug' => 'pisang-uli',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Durian Pelangi',
            'slug' => 'durian-pelangi',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '100000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Pisang Klutuk',
            'slug' => 'pisang-klutuk',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        
        Product::create([
            'name' => 'Semangka Tanpa Biji',
            'slug' => 'semangka-tanpa-biji',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Semangka Hibrida',
            'slug' => 'semangka-hibrida',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Jeruk Santang',
            'slug' => 'jeruk-santang',
            'users_id' => '1',
            'categories_id' => '5',
            'price' => '12500',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Jeruk Siam Bali',
            'slug' => 'jeruk-siam-bali',
            'users_id' => '1',
            'categories_id' => '5',
            'price' => '14500',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Jeruk Medan',
            'slug' => 'jeruk-medan',
            'users_id' => '1',
            'categories_id' => '5',
            'price' => '12500',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Jeruk Mandarin',
            'slug' => 'jeruk-mandarin',
            'users_id' => '1',
            'categories_id' => '5',
            'price' => '33000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Semangka Piknik',
            'slug' => 'semangka-piknik',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);

        Product::create([
            'name' => 'Semangka Daging Kuning',
            'slug' => 'semangka-daging-kuning',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Durian Merah',
            'slug' => 'durian-merah',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '40000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
        Product::create([
            'name' => 'Durian Musang King',
            'slug' => 'durian-musang-king',
            'users_id' => '1',
            'categories_id' => '6',
            'price' => '280000',
            'description' => '<p>Selamat Datang di Toko Buah Online! Penuhi kebutuhan dapur Anda dengan berbelanja di sini. Belanja praktis, pesan hari ini besok langsung diantar! Harga murah kualitas Premium!</p><p>DESKRIPSI PENGIRIMAN - (PENTING!)Pesanan hari ini 00:00 - 23:59 dikirim besok (H+1)</p><p>Start pengiriman setiap harinya pk. 08:00 (mengikuti antrian dan sistem pengantaran)</p><p>Kami menjamin kesegaran produk yang kami kirim setiap harinya. Setelah datang, kami bersihkan dan siapkan untuk dikirimkan ke pelanggan. Maka tertulis dalam DESKRIPSI PENGIRIMAN, keterangan waktu pemesanan dan pengiriman belanjaan Anda. Buah yang Anda terima adalah yang terbaik dari kami.</p>'
        ]);
    }
}
