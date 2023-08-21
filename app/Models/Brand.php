<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTranslatable;


class Brand extends Model implements Translatable
{
    use HasFactory, TranslatableTranslatable;

    public $translatedAttributes = ['title'];

    protected $fillable=['slug','status'];


} // End of model  
