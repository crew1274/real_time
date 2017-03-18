<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
           'city' => '台南',
           'utc' => '8',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
            ]);
    }
}
