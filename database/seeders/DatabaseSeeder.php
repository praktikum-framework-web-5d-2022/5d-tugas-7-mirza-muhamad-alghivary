<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Barang;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        Barang::create([
            'kode' => 'IF001',
            'nama' => 'Minyak',
            'harga' => 30000
        ]);

        Barang::create([
            'kode' => 'IF002',
            'nama' => ' Gula',
            'harga' => 35000
        ]);

        Barang::create([
            'kode' => 'IF003',
            'nama' => 'Beras ',
            'harga' => 60000
        ]);

        Barang::create([
            'kode' => 'IF004',
            'nama' => 'Sabun ',
            'harga' => 5000
        ]);

        Barang::create([
            'kode' => 'IF005',
            'nama' => 'Kopi',
            'harga' => 30000
        ]);



    }
}
