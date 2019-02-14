<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            ['name' => 'Champion League','url' => 'champion-league','parent_id'=>4,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Europe','url' => 'europe','parent_id'=>4,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
