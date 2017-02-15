<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Demand_recordsTableSeeder::class);
        $this->call(Demand_settingsTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OffloadsTableSeeder::class);
    }
}
