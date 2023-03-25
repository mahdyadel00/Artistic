<?php

namespace Database\Seeders;

use App\Setting;
use App\SettingData;
use Illuminate\Database\Seeder;

class SettingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SettingData::create([

            'setting_id'    => Setting::first()->id,
            'lang_id'       => 1,
            'name'          => 'Setting 1',
            'description'   => 'Setting 1 Description',
            'keywords'      => 'Setting 1 Keywords',
        ]);
    }
}
