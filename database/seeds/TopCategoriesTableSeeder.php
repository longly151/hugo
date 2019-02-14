<?php

use Illuminate\Database\Seeder;

class TopCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('top_categories')->insert([
            ['name' => 'News','url' => 'news','author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Sport','url' => 'sport','author_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Discovery','url' => 'discovery','author_id' => 3,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Travel','url' => 'travel','author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Technology','url' => 'technology','author_id' => 1,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
