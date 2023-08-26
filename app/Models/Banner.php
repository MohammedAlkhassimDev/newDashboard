<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTranslatable;

class Banner extends Model implements Translatable
{
    use HasFactory, TranslatableTranslatable;

    public $translatedAttributes = ['title' , 'sub_title'];

    protected $fillable=['slug',  'photo' ,'status'];

}