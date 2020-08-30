<?php

use Illuminate\Database\Seeder;

class CategoySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Antipasti',
        ]);

        DB::table('categories')->insert([
            'name' => 'Pizze',
        ]);

        DB::table('categories')->insert([
            'name' => 'Pizze Speciali',
        ]);

        DB::table('categories')->insert([
            'name' => 'Panini',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bibite',
        ]);

        DB::table('categories')->insert([
            'name' => 'Birre',
        ]);

        DB::table('categories')->insert([
            'name' => 'Vini',
        ]);
    }
}
