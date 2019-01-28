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
        $faker = Faker\Factory::create();
        $limit = 100;
        DB::table('roles')->insert([
            ['name' => 'admin','created_at' => now(),'updated_at' => now()],
            ['name' => 'moderator','created_at' => now(),'updated_at' => now()],
            ['name' => 'poster','created_at' => now(),'updated_at' => now()],
            ['name' => 'customer','created_at' => now(),'updated_at' => now()]
        ]);
        DB::table('users')->insert([
            [
                'fullname' => 'Le Viet Long',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'phoneNumber' => '0327575972',
                'address' => 'K15/6 Tran Thai Tong,Da Nang',
                'avatar' => 'https://s3.us-east-2.amazonaws.com/hugoenglishclub/Avatar+1.jpg',
                'password' =>  bcrypt('admin'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Le Long',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'avatar' => 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png',
                'phoneNumber' => '0327575973',
                'address' => '15 Le Duan,Da Nang',
                'password' =>  bcrypt('admin'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Vilagon',
                'username' => 'admin3',
                'email' => 'admin3@gmail.com',
                'avatar' => 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png',
                'phoneNumber' => '0327575974',
                'address' => '29 Le Dai Hanh,Da Nang',
                'password' =>  bcrypt('admin'),
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Vi Long',
                'username' => 'admin4',
                'email' => 'admin4@gmail.com',
                'avatar' => 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png',
                'phoneNumber' => '0327575975',
                'address' => '71 Nguyen Tri Phuong,Da Nang',
                'password' =>  bcrypt('admin'),
                'role_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        for ($i=0; $i<$limit; $i++) {
            DB::table('users')->insert([
                'fullname' => $faker->name,
                'username' => $faker->username,
                'email' => $faker->unique()->email,
                'avatar' => 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png',
                'phoneNumber' => $faker->unique()->regexify('/^(0)(16[0-9^01][0-9]{7}|12[0-9]{8}|18[68][0-9]{7}|19[9][0-9]{7}|8[689][0-9]{7}|9[0-9^5][0-9]{7})$/'),
                'address' => $faker->unique()->streetAddress,
                'password' =>  bcrypt('admin'),
                'role_id' => rand(2,4),
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
            ]);
        }
    }
}
