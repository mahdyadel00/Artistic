<?php

namespace App\Modules\Admin\Models\Category;

use App\Bll\Lang;
use Illuminate\Database\Eloquent\Model;

class CategoryData extends Model
{
    protected $guarded = [];
    protected $table = 'categories_data';


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
