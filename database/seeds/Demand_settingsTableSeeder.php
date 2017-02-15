<?php

use Illuminate\Database\Seeder;

class Demand_settingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demand_settings')->insert([
            'value' => '800', 'value_max' => '600', 'value_min' => '0',
            'load_off_gap' => '0', 'reload_delay' => '0', 'reload_gap' => '0','cycle'=>'15',
            'mode' => '先卸先復歸','group' => '不設定',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
