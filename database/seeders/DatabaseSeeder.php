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

        User::create([
            'name' => 'Hayasaka Ai',
            'email' => 'hayasaka@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Arthuria Pendragon',
            'email' => 'pendragon@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $this->call(LocationsTableSeeder::class);

        Product::create([
            'name' => 'Mangga Madu',
            'slug' => 'mangga-madu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Mangga Gedong Gincu',
            'slug' => 'mangga-gedong-gincu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Mangga Indramayu',
            'slug' => 'mangga-indramayu',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Mangga Alpukat',
            'slug' => 'mangga-alpukat',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Mangga Golek',
            'slug' => 'mangga-golek',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Mangga Lalijiwo',
            'slug' => 'mangga-lalijiwo',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);
        
        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Ambon',
            'slug' => 'pisang-ambon',
            'users_id' => '1',
            'categories_id' => '1',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Tanduk',
            'slug' => 'pisang-tanduk',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Raja',
            'slug' => 'pisang-raja',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Kepok',
            'slug' => 'pisang-kepok',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Uli',
            'slug' => 'pisang-uli',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Pisang Klutuk',
            'slug' => 'pisang-klutuk',
            'users_id' => '1',
            'categories_id' => '2',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        
        Product::create([
            'name' => 'Semangka Tanpa Biji',
            'slug' => 'semangka-tanpa-biji',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Semangka Hibrida',
            'slug' => 'semangka-hibrida',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Semangka Piknik',
            'slug' => 'semangka-piknik',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);

        Product::create([
            'name' => 'Semangka Daging Kuning',
            'slug' => 'semangka-daging-kuning',
            'users_id' => '1',
            'categories_id' => '3',
            'price' => '20000',
            'description' => 'Fruits are important sources of dietary fibre, vitamins (especially vitamin C), and antioxidants. Although fresh fruits are subject to spoilage, their shelf life can be extended by refrigeration or by the removal of oxygen from their storage or packaging containers. Fruits can be processed into juices, jams, and jellies and preserved by dehydration, canning, fermentation, and pickling. Waxes, such as those from bayberries (wax myrtles), and vegetable ivory from the hard fruits of a South American palm species (Phytelephas macrocarpa) are important fruit-derived products. Various drugs come from fruits, such as morphine from the fruit of the opium poppy.'
        ]);
    }
}
