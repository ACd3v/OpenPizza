<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'user_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $order = Order::find(1)->products()->attach([8, 4, 2]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $order = Order::find(2)->products()->attach(['6', '3', '9']);

        DB::table('orders')->insert([
            'user_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $order = Order::find(3)->products()->attach(['4', '5', '11']);
    }
}
