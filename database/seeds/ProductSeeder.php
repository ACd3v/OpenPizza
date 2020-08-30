<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Prosciutto e Mozzarella'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '4',
            'product_id' => '1'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '5',
            'product_id' => '1'
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'All\'italiana'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '4',
            'product_id' => '2'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '6',
            'product_id' => '2'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '8',
            'product_id' => '2'
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Posciutto e Melone'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '11',
            'product_id' => '3'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '5',
            'product_id' => '3'
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Boscaiola'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '7',
            'product_id' => '4'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '5',
            'product_id' => '4'
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Margherita'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '1',
            'product_id' => '5'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '3',
            'product_id' => '5'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '4',
            'product_id' => '5'
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Marinara'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '1',
            'product_id' => '6'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '3',
            'product_id' => '6'
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Tonno e Cipolla'
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Napoletana'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '1',
            'product_id' => '9'
        ]);

        DB::table('ingredient_product')->insert([
            'ingredient_id' => '3',
            'product_id' => '9'
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Al salmone'
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Crudaiola'
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Pizza al Tartufo'
        ]);

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'Pizza Baccalà'
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Salsiccia alla brace'
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Cotoletta e Insalata'
        ]);

        DB::table('products')->insert([
            'category_id' => '4',
            'name' => 'Panino con Hamburger e Insalata'
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Coca Cola'
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Bottiglietta di Acqua liscia'
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Bottiglietta di Acqua frizzante'
        ]);

        DB::table('products')->insert([
            'category_id' => '5',
            'name' => 'Fanta'
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Peroni 33cl'
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Tuborg 33cl'
        ]);

        DB::table('products')->insert([
            'category_id' => '6',
            'name' => 'Heineken 33cl'
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Aglianico'
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Spumante'
        ]);

        DB::table('products')->insert([
            'category_id' => '7',
            'name' => 'Prosecco'
        ]);
    }
}
