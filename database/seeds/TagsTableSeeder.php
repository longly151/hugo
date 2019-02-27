<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50; // limit > 20
        $min = 1;
        // DB::table('tags')->insert([
        //     [
        //         'name' => 'bong da',
        //         'author_id' => 1,
        //         'url' => 'bong-da',
        //         'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
        //         'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        //         'deleted_at' => NULL
        //     ],
        //     [
        //         'name' => 'cong nghe',
        //         'author_id' => 1,
        //         'url' => 'cong-nghe',
        //         'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
        //         'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        //         'deleted_at' => NULL,
        //     ],
        //     [
        //         'name' => 'smartphone',
        //         'author_id' => 1,
        //         'url' => 'smartphone',
        //         'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
        //         'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        //         'deleted_at' => NULL
        //     ],
        //     [
        //         'name' => 'laptop',
        //         'author_id' => 1,
        //         'url' => 'laptop',
        //         'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
        //         'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        //         'deleted_at' => NULL
        //     ],
        // ]);
        // for ($i=0; $i<$limit; $i++) {
        //     if($i<10) $max = 4; else $max = $limit;
        //     $name = $faker->unique()->word;
        //     DB::table('tags')->insert([
        //         'name' => $name,
        //         'author_id' => $faker->numberBetween($min, $max),
        //         'url' => str_slug($name,'-'),
        //         'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
        //         'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        //         'deleted_at' => $faker->randomElement($array = array (now(),NULL))
        //     ]);
        // }

        DB::table('tags')->insert([
            [
                'name' => 'Blog',
                'author_id' => 1,
                'url' => 'blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tin tức',
                'author_id' => 1,
                'url' => 'tin-tuc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Câu chuyện Hugo',
                'author_id' => 1,
                'url' => 'cau-chuyen-hugo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hoạt động',
                'author_id' => 1,
                'url' => 'hoat-dong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sự kiện',
                'author_id' => 1,
                'url' => 'su-kien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trại Hugo',
                'author_id' => 1,
                'url' => 'trai-hugo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staff',
                'author_id' => 1,
                'url' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
