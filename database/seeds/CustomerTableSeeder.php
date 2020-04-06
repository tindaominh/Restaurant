<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'order_id' => 1,
                'so_ban' => 1,
                'vi_tri' => 1,
                'trang_thai' => 1,
                'tong_tien' => 300000
            ],
            [
                'order_id' => 2,
                'so_ban' => 2,
                'vi_tri' => 1,
                'trang_thai' => 1,
                'tong_tien' => 120000
            ]
        ]);
    }
}
