<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingData extends Model
{
    protected $table = 'settings_data';
    protected $fillable = ['setting_id', 'lang_id', 'name', 'description', 'keywords'];
}
