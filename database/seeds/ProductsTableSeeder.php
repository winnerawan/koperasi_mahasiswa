<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::insert([

            [
                'category_id' => 3,
                'merchant_id' => 1,
                'name' => 'Sony Xperia L',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 2000000,
                'image' => 'sony1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Sony Xperia X',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 3000000,
                'image' => 'sony2.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Samsung Galaxy S6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 3000000,
                'image' => 'samsung1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 1,
                'name' => 'HTC M9',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 2400000,
                'image' => 'htc1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Huawei P9',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 3000000,
                'image' => 'huawei1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Xiaomi Mi6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 2600000,
                'image' => 'xiaomi1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Apple 6+',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 4000000,
                'image' => 'apple1.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_id' => 3,
                'merchant_id' => 2,
                'name' => 'Sony Xperia ZX',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
                'price' => 5000000,
                'image' => 'sony3.jpg',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]

//            ,
//            [
//                'category_id' => 3,
//                'merchant_id' => 2,
//                'name' => 'Xperia Z',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
//                'price' => 3000000,
//                'image' => 'sony4.jpg',
//                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
//            ],
//            [
//                'category_id' => 3,
//                'merchant_id' => 1,
//                'name' => 'Xiaomi Mi6s',
//                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. ',
//                'price' => 2000000,
//                'image' => 'xiaomi2.jpg',
//                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
//            ]
        ]);
    }
}
