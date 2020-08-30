<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Prosciutto e Mozzarella',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(1)->ingredients()->attach(['4', '5']);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'All\'italiana',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(2)->ingredients()->attach(['4', '6', '8']);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Posciutto e Melone',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(3)->ingredients()->attach(['11', '5']);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Boscaiola',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(4)->ingredients()->attach(['7', '5']);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Margherita',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(5)->ingredients()->attach(['1', '3', '4']);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Marinara',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(6)->ingredients()->attach(['1', '3']);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Tonno e Cipolla',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Napoletana',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $product = Product::find(8)->ingredients()->attach(['1', '3']);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Al salmone',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Crudaiola',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Pizza al Tartufo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Pizza Baccalà',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Salsiccia alla brace',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Cotoletta e Insalata',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Hamburger e Insalata',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Coca Cola',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Bottiglietta di Acqua liscia',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Bottiglietta di Acqua frizzante',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Fanta',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Peroni 33cl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Tuborg 33cl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Heineken 33cl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Aglianico',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Spumante',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Prosecco',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
