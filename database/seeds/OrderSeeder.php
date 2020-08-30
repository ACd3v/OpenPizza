<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => '1'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '8'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '4'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '2'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '6'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '3'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '9'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '4'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '5'
        ]);

        DB::table('order_product')->insert([
            'order_id' => '1',
            'product_id' => '11'
        ]);
    }
}
