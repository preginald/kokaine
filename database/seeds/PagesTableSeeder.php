<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $pages = [
            ['asset_id' => 2, 'name' => 'Home', 'slug' => '', 'description' => 'This is the home landing page', 'created_at' => $now, 'updated_at' => $now],
            ['asset_id' => 2, 'name' => 'About', 'slug' => 'about', 'description' => 'About Us', 'created_at' => $now, 'updated_at' => $now],
            ['asset_id' => 2, 'name' => 'Blog', 'slug' => 'blog', 'description' => 'Blog landing page', 'created_at' => $now, 'updated_at' => $now],
            ['asset_id' => 2, 'name' => 'Contact', 'slug' => 'contact', 'description' => 'Contact us page', 'created_at' => $now, 'updated_at' => $now],
            ['asset_id' => 2, 'name' => 'Privacy', 'slug' => 'privacy', 'description' => 'Privacy page', 'created_at' => $now, 'updated_at' => $now],
        ];
        
        DB::table('pages')->insert($pages);
    }
}
