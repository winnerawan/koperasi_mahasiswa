<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::insert([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'phone' => '0877121327812',
            'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
        ]);
    }
}
