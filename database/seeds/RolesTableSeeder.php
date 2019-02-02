<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin','created_at' => now(),'updated_at' => now()],
            ['name' => 'moderator','created_at' => now(),'updated_at' => now()],
            ['name' => 'poster','created_at' => now(),'updated_at' => now()],
            ['name' => 'customer','created_at' => now(),'updated_at' => now()]
        ]);
    }
}
