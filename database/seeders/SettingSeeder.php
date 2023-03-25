<?php

namespace Database\Seeders;

use App\Modules\Admin\Models\Category\Category;
use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([

            'email'     => 'admin@email.com',
            'phone'     => '0123456789',
            'address'   => 'Egypt',
            'logo'      => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',
            'facebook'  => 'https://www.facebook.com/',
            'twitter'   => 'https://twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'youtube'   => 'https://www.youtube.com/',
            'whatsapp'  => 'https://www.whatsapp.com/',
            'working_hours' => '8:00 AM - 5:00 PM',
        ]);
    }
}
