<?php

namespace Database\Seeders;

use App\Models\ImageAccount;
use Illuminate\Database\Seeder;

class ImageAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageAccount::create([

            'image_account'   => 'image_account.png',
        ]);
    }
}
