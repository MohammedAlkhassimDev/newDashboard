<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTranslatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements Translatable
{
    use HasFactory, TranslatableTranslatable;

    public $translatedAttributes = ['title', 'summary'];

    protected $fillable = ['slug','photo','is_parent','parent_id','added_by', 'status'];

    // Get all Categories 
    public static function getAllCategory() {

        return Category::orderBy('id', 'DESC') -> paginate (10);
        
    } // End of get all category

    // Shift Child 
    public static function shiftChild($cat_id) {
        return Category::whereIn('id', $cat_id) -> update(['is_parent' => 1]);
    } // End of shift child

    public function products () {
        return $this->hasMany('App\Models\Product', 'cat_id', 'id') ->  where ('status' , 'active');
    } // End of products 

    public  function sub_products () {
        return $this-> hasMany('App\Models\Product', 'child_cat_id', 'id') -> where ('status', 'active');
    } // End of sub products

    public static function getChildByParentId ($id) {
        // return Category::where('parent_id', $id) -> orderBy('id','ASC') -> pluck('title', 'id'); 
        return Category::where('parent_id',$id)->orderBy('id','ASC')->pluck('title','id');
    } // End of get Child by parent ID

} // End of model









