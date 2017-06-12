<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class OrganisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        
        $organisations = [
            ['name' => 'Dev Support of Australia', 'email' => 'info@devsupport.com.au', 'phone' => '03 9988 7777', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'King of Pop', 'email' => 'fans@kingofpop.com', 'phone' => '03 5544 8787', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'James Dean', 'email' => 'fans@warnerbro.com', 'phone' => '03 6633 1111', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'The Whitehouse', 'email' => 'contact@whitehouse.gov', 'phone' => '03 8855 6644', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Disney Studios', 'email' => 'contact@disney.com', 'phone' => '03 4488 5775', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hell Inc', 'email' => 'gates@hell.com', 'phone' => '06 666', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'The Forest', 'email' => 'the@forest.com', 'phone' => '03 5566 7777', 'created_at' => $now, 'updated_at' => $now]
        ];
        DB::table('organisations')->insert($organisations );
    }
}
