<?php

namespace Database\Seeders;

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
        User::create([
            'email' => 'vic@gmail.com',
            'name' => 'vic',
            'password' => \Hash::make('12345'),
            'status' => 'aktif',
        ]);
    }
}
