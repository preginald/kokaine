<?php

use Illuminate\Database\Seeder;
use \Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $users = [
            ['name' => 'Peter Reginald', 'email' => 'peter@email.com', 'password' => bcrypt('password'), 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Michael Carniato', 'email' => 'michael@email.com', 'password' => bcrypt('password'), 'created_at' => $now, 'updated_at' => $now]
        ];

        DB::table('users')->insert($users);
    }
}
