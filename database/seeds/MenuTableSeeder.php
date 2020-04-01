<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_menu')->insert([
            [
                'menu_name' => 'Gà nướng',
                'menu_price' => '150000',
                'menu_image' => 'ganuong.png',
                'menu_active' => '1'
            ],
            [
                'menu_name' => 'Thịt luộc',
                'menu_price' => '30000',
                'menu_image' => 'thitluoc.jpg',
                'menu_active' => '1'
            ]
        ]);
    }
}
