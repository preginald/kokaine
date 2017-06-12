<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $contacts = [
            ['name' => 'Peter Reginald', 'email' => 'peter@email.com', 'phone' => '0400 444 000', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Michael Carniato', 'email' => 'michael@email.com', 'phone' => '0411 999 333', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Michael Jackson', 'email' => 'michael@kingofpop.com', 'phone' => '0422 555 666', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'James Dean', 'email' => 'jamesdean@warnerbro.com', 'phone' => '0455 938 043', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Donald Trump', 'email' => 'potus@whitehouse.gov', 'phone' => '0499 888 777', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Daisy Duck', 'email' => 'daisyduck@disney.com', 'phone' => '9399 909 370', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Satan Hellington', 'email' => 'satan@hell.com', 'phone' => '666 6669', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mama Bear', 'email' => 'mamabear@forest.com', 'phone' => '3784 9489', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Papa Bear', 'email' => 'papabear@forest.com', 'phone' => '3784 9889', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Baby Bear', 'email' => 'babybear@forest.com', 'phone' => '3784 9989', 'created_at' => $now, 'updated_at' => $now]
        ];

        DB::table('contacts')->insert($contacts);

        $attach = [
            ['contact_id' => 1, 'organisation_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 2, 'organisation_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 3, 'organisation_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 4, 'organisation_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 5, 'organisation_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 6, 'organisation_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 7, 'organisation_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 8, 'organisation_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 9, 'organisation_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['contact_id' => 10, 'organisation_id' => 7, 'created_at' => $now, 'updated_at' => $now]
        ];
        
        DB::table('contact_organisation')->insert($attach);
    }
}
