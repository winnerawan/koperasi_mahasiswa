<?php

use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Payment::insert([

            [
                'name' => 'Cash on Delivery',
                'description' => 'Bayar di Kopma'
            ],
            [
                'name' => 'Transfer Antar Bank',
                'description' => 'Silahkan Transfer Ke no Rekening 123231231'
            ]
        ]);
    }
}
