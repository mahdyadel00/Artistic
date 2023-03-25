<?php

namespace Database\Seeders;

use App\Models\DefaultImage;
use Illuminate\Database\Seeder;

class DefaultImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefaultImage::create([

            'favicon'   => 'favicon.png',
            'header'    => 'header.png',
            'footer'    => 'footer.png',
        ]);
    }
}
