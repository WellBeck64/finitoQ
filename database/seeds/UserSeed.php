<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'FinitoQ',
            'email' => 'finitoQ@gmail.com',
            'password' => bcrypt('FinitoQ.123'),
        ]);
    }
}
