<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name' => 'Ali',
           'email' => 'root@mail.com',
           'password' => bcrypt('root'),
           'utc' => 8,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
            ]);
    }
}
