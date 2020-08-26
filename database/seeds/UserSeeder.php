<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'mario',
            'surname' => 'rossi',
            'email' => 'admin@admin.it',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
