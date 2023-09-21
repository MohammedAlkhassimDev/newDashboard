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

    public function __construct() {
        $this->middleware(['auth:api','changeLang']);
    }

    public function index(Request $request) {

        $categories = Category::get();

        $products = Product::where('status', 'active') -> get();

        $categories = CategoryResource::collection($categories);

        $products = ProductResource::collection($products);

        return $this->success(['categories' => $categories, 'products' => $products], 'success');
    }
}
