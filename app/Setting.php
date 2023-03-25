<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    protected $fillable = ['email' , 'phone' , 'address' , 'logo' , 'facebook' , 'twitter' , 'instagram' , 'youtube' , 'whatsapp' , 'working_hours'];
}