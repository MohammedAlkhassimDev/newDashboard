<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as TranslatableTranslatable;


class Product extends Model implements Translatable
{
    use HasFactory, TranslatableTranslatable;

    public $translatedAttributes = ['title', 'summary','description'];

    protected $fillable=['slug','cat_id','child_cat_id','price','brand_id','discount','status','photo','size','stock','is_featured','condition'];

    public function cat_info () {
        return $this->hasOne('App\Models\Category', 'id', 'cat_id');
    } //  End of cat_info 

    public function sub_cat_info () {
        return $this->hasOne('App\Models\Category', 'id', 'child_cat_id');
    } // End of sub cat_info

    public static function getAllProducts () {

        return Product::with(['cat_info', 'sub_cat_info']) -> orderBy ('id', 'desc') -> paginate (10);

    } // End of get all products

    public static function getProductByCart ($id) {
        return self::where('id', $id) -> get() -> toArray();
    } // End of get product by cart

    public function images () {
        return $this->hasMany(ProductImages::class, 'product_id');
    } // End of product images

    public function brand () {
        $this-> belongsTo('App\Models\Brand', 'brand_id');
    } // end of brand

} // End of model 
