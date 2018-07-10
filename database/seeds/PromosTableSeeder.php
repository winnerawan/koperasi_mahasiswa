<?php

use Illuminate\Database\Seeder;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Promo::insert([

            [
                'promo' => 'Barang Bagus',
                'product_id' => 1,
            ],
            [
                'title' => 'Murah Meriah',
                'product_id' => 6,
            ]
        ]);
    }
}
