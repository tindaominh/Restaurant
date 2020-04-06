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
        DB::table('tbl_payment')->insert([
            [
                'customer_id' => 1,
                'customer_soban' => 1,
                'customer_vitri' => 1,
                'payment_total' => 300000,
                'payment_active' => 1
            ],
            [
                'customer_id' => 2,
                'customer_soban' => 2,
                'customer_vitri' => 1,
                'payment_total' => 120000,
                'payment_active' => 1
            ]
        ]);
    }
}
