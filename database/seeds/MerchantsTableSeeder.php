<?php

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Merchant::insert([
            [
                'name' => 'Kopma',
                'email' => 'kopma@gmail.com',
                'password' => bcrypt('kopma'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'Agus Bambang',
                'email' => 'agus@gmail.com',
                'password' => bcrypt('agus'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'Paijo Ali',
                'email' => 'paijo@gmail.com',
                'password' => bcrypt('paijo'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
