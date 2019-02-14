<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Domestic','url' => 'domestic','parent_id'=>1,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'International','url' => 'international','parent_id'=>1,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Basketball','url' => 'basketball','parent_id'=>2,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Soccer','url' => 'soccer','parent_id'=>2,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Domestic','url' => 'domestic','parent_id'=>4,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'International','url' => 'international','parent_id'=>4,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Tech News','url' => 'tech-news','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Laptop','url' => 'laptop','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Mobile','url' => 'mobile','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
