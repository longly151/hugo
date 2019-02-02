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
        $limit = 100; // limit > 20
        for ($i=0; $i<20; $i++) {
            $name = $faker->unique()->word();
            DB::table('tags')->insert([
                'name' => $name,
                'author_id' => $faker->numberBetween($min = 1, $max = 4),
                'url' => str_slug($name,'-'),
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
                'deleted_at' => $faker->randomElement($array = array (now(),NULL))
            ]);
        }
        for ($i=0; $i<$limit-20; $i++) {
            $name = $faker->unique()->word();
            DB::table('tags')->insert([
                'name' => $name,
                'author_id' => $faker->numberBetween($min = 1, $max = $limit),
                'url' => str_slug($name,'-'),
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
                'deleted_at' => $faker->randomElement($array = array (now(),NULL))
            ]);
        }
    }
}
