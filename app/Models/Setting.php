<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements TranslatableContract
{
    use HasFactory , Translatable;
    
    public $translatedAttributes = ['title', 'content'.'meta', 'address'];

    protected $fillable = ['logo','phone','email','facebook','instagram'];

    public static function checkSetting () {

        $setting = self::all();

        if ($setting -> count() < 1) {
            $data  = [ 'id' => 1 ];

            foreach (config('app.languages') as $key => $value) {
                $data[$key]['title'] = $value;
            }

            self::create($data);
        } 

        return self::first();

    } // End of check setting 


} // End of setting 
