<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $assets = [
            ['organisation_id' => '1', 'name' => 'www.kokaine.com', 'description' => 'Addictive Management Suite for Digital Developers!', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '1', 'name' => 'www.devsupport.com.au', 'description' => 'This is the homepage for Digital Development Agency of Australia', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '2', 'name' => 'www.kingofpop.com', 'description' => 'Discover the king of pop music.', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '3', 'name' => 'www.warnerbro.com', 'description' => 'Where Hollywood stars are made.', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '4', 'name' => 'www.whitehouse.gov', 'description' => 'This is where the president lives.', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '5', 'name' => 'www.disney.com', 'description' => 'Live out your childhood dreams.', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '6', 'name' => 'www.hell.com', 'description' => 'Come in and stay a while!', 'created_at' => $now, 'updated_at' => $now],
            ['organisation_id' => '7', 'name' => 'www.theforest.com', 'description' => 'Take a deep breath.', 'created_at' => $now, 'updated_at' => $now]
        ];
        DB::table('assets')->insert($assets);
    }
}
