<?php

use Illuminate\Database\Seeder;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('settings')->insert(['key' => 'currency', 'value' => 'USD']);
       DB::table('settings')->insert(['key' => 'app_title', 'value' => 'Ceylon Beats']);
       DB::table('settings')->insert(['key' => 'payment_getway_oparation', 'value' => 'sandbox']);
       DB::table('settings')->insert(['key' => 'search_enabled', 'value' => '1']);
    }
}
