<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    use ApiResponse;

   public function __construct()
   {
        return $this->middleware(['changeLang']);
   }

    public function index()
    {

        try {
            $categories = Category ::get();

            $products = Product::where('status', 'active')->get();

            $categories = CategoryResource::collection($categories);

            $products = ProductResource::collection($products);

            return $this->returnData('data', ['categories' => $categories, 'products' => $products], 'success');
        } catch (\Throwable $ex) {
            return $this->returnError(404 ,'error');
        }
    } // End of index

    public function allMainCategory() {
      
        $categories = Category::where('is_parent', 1) -> get();

        $categories = CategoryResource::collection($categories);

        return $this->returnData('categories',$categories,"success");

    } // End of index

    public function getChildCtegoryByParentId($id) {

        $child_cats = Category::where('parent_id', $id) -> get();

        $child_cats = CategoryResource::collection($child_cats);

        if ($child_cats -> count() > 0) {
            return $this->returnData('childCategories', $child_cats);
        }else {
            return $this->success("not found");
        }
    } // End get Child Ctegory By Parent Id

    public function allProducts () {

        $products = Product::where('status', 'active')->get();

        $products = ProductResource::collection($products);

        return $this->returnData( 'products' , $products, 'success');
    } // End get all Products

    public function getProductsByCatId ($id) {
        $products = Product::where('cat_id', $id) -> get();

        $products = ProductResource::collection($products);

        if ($products -> count() > 0) {
            return $this->returnData('products', $products);
        }else {
            return $this->success("not found");
        }
    } // End get Products By Cat Id

    public function getProductsBySubCatId ($id) {
        $products = Product::where('child_cat_id', $id) -> get();

        $products = ProductResource::collection($products);

        if ($products -> count() > 0) {
            return $this->returnData('products', $products);
        }else {
            return $this->success("not found");
        }
    } // End get Products By Sub Cat Id


}
