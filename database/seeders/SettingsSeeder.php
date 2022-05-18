<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_name' => "Lulo",
            'token_name' => "Lulo",
            'token_symbol' => "Lul",
            'amt_usd' => "0.2",
            'site_email' => "Lulo@support.com",
        ]);
    }
}
