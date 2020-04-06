<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            [
                'customer_id' => 1,
                'menu_id' => 1,
                'so_luong' => 2,
                'ghi_chu' => 'Ăn cay, nhiều rau.',
                'tong_tien' => 150000
            ],
            [
                'customer_id' => 2,
                'menu_id' => 2,
                'so_luong' => 4,
                'ghi_chu' => 'Mắm tôm, nhiều rau.',
                'tong_tien' => 30000
            ]
        ]);
    }
}
