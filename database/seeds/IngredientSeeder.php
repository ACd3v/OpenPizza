<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'name' => 'Farina 00',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Farina Integrale',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Pomodoro',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Mozzarella',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Prosciutto',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Salame',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Funghi',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Olive',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Rucola',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Peperoni',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Melone',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
