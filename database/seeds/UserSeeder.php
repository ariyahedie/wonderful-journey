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
        DB::table('users')->insert(
            [
                'name' => 'Ariya Hedie Taniyara',
                'email' => 'ariya.hedie29@gmail.com',
                'phone' => '08569053694',
                'role' => 'Admin',
                'password' => 'halohalotest123'
            ],
            [
                'name' => 'Johnny Rotten',
                'email' => 'johnny@google.com',
                'phone' => '08111022021',
                'role' => 'User',
                'password' => 'johnny135'
            ]
        );
    }
}
