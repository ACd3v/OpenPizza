<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'name' => 'Mario',
            'surname' => 'Rossi',
            'email' => 'admin@admin.it',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Nicola',
            'surname' => 'Verdi',
            'email' => 'user@user.it',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 'user'
        ]);
    }
}
