<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Farina Integrale',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Pomodoro',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Mozzarella',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Prosciutto',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Salame',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Funghi',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Olive',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Rucola',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Peperoni',
        ]);

        DB::table('ingredients')->insert([
            'name' => 'Melone',
        ]);
    }
}
