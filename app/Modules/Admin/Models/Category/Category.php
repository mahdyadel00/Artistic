<?php

namespace App\Modules\Admin\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function data(){
        return $this->hasMany(CategoryData::class);
    }

}
