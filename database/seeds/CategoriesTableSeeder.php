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
        // DB::table('categories')->insert([
        //     ['name' => 'News','url' => 'news','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Sport','url' => 'sport','parent_id'=>NULL,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Discovery','url' => 'discovery','parent_id'=>NULL,'author_id' => 3,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Travel','url' => 'travel','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Technology','url' => 'technology','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],

        //     ['name' => 'Domestic','url' => 'domestic','parent_id'=>1,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'International','url' => 'international','parent_id'=>1,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Basketball','url' => 'basketball','parent_id'=>2,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Soccer','url' => 'soccer','parent_id'=>2,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Domestic','url' => 'domestic','parent_id'=>4,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'International','url' => 'international','parent_id'=>4,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Tech News','url' => 'tech-news','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Laptop','url' => 'laptop','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Mobile','url' => 'mobile','parent_id'=>5,'author_id' => 1,'created_at' => now(),'updated_at' => now()],

        //     ['name' => 'ShowBiz','url' => 'showbiz','parent_id'=>6,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Financial','url' => 'financial','parent_id'=>6,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Champion League','url' => 'champion-league','parent_id'=>9,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'Europe','url' => 'europe','parent_id'=>9,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        //     ['name' => 'V-League','url' => 'v-league','parent_id'=>9,'author_id' => 2,'created_at' => now(),'updated_at' => now()],
        // ]);
        DB::table('categories')->insert([
            ['name' => 'Câu chuyện Hugo','url' => 'cau-chuyen-hugo','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Tin tức','url' => 'tin-tuc','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Thông báo','url' => 'thong-bao','thong-bao'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Sự kiện','url' => 'su-kien','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Nội quy','url' => 'noi-quy','parent_id'=>NULL,'author_id' => 1,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
