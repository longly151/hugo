<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'moderator'],
            ['name' => 'poster'],
            ['name' => 'customer']
        ]);
        DB::table('users')->insert([
            [
                'fullname' => 'Le Viet Long',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'phoneNumber' => '0327575972',
                'password' =>  bcrypt('admin'),
                'roleId' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Vilagon',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'phoneNumber' => '0327575973',
                'password' =>  bcrypt('admin'),
                'roleId' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'VLG',
                'username' => 'admin3',
                'email' => 'admin3@gmail.com',
                'phoneNumber' => '0327575974',
                'password' =>  bcrypt('admin2'),
                'roleId' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Vi Long',
                'username' => 'admin4',
                'email' => 'admin4@gmail.com',
                'phoneNumber' => '0327575975',
                'password' =>  bcrypt('admin3'),
                'roleId' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Le Viet Long',
                'username' => 'a',
                'email' => 'a@gmail.com',
                'phoneNumber' => '0327575976',
                'password' =>  bcrypt('a'),
                'roleId' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
