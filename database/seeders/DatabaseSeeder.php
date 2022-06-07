<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Usability;
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

        Usability::factory(50)->create();

        // $this->call(LocationsTableSeeder::class);

    }
}
