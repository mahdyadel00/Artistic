<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Modules\Admin\Models\Category\Category;
use App\Setting;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([

            'title' => 'English',
            'code' => 'en',
            'flag' => 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png',

        ]);
    }
}
