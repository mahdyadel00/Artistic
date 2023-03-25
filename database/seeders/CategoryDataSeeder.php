<?php

namespace Database\Seeders;

use App\Modules\Admin\Models\Category\Category;
use App\Modules\Admin\Models\Category\CategoryData;
use Illuminate\Database\Seeder;

class CategoryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryData::create([

            'category_id'   => Category::first()->id,
            'lang_id'       => 1,
            'name'          => 'Category 1',
            'description'   => 'Category 1 Description',
        ]);
    }
}
