<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;
    // use Translatable;
    // public $translatedAttributes = ['title', 'description'];
    protected $guarded = ['id'];
}
