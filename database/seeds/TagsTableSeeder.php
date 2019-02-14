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
        for ($i=0; $i<$limit; $i++) {
            if($i<10) $max = 4; else $max = $limit;
            $name = $faker->unique()->word;
            DB::table('tags')->insert([
                'name' => $name,
                'author_id' => $faker->numberBetween($min, $max),
                'url' => str_slug($name,'-'),
                'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 year', $timezone = null),
                'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
                'deleted_at' => $faker->randomElement($array = array (now(),NULL))
            ]);
        }
    }
}
