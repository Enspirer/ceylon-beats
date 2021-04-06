<?php

use Illuminate\Database\Seeder;
use DB;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('settings')->insert(
           [
               'key' => 'currency',
               'value' => 'USD'
           ],[
               'key' => 'app_title',
               'value' => 'Ceylon Beats'
           ],[
               'key' => 'payment_getway_oparation',
               'value' => 'sandbox'
           ],[
               'key' => 'search_enabled',
               'value' => '1'
           ]
       );
    }
}
