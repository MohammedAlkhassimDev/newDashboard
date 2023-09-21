<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponse;

    public function __construct()
    {
        $this->middleware(['auth:api','changeLang']);
      
    } // construct 

    public function index(Request $request) {
      
        $categories = Category::get();

        return $this->success($categories);

    } // End of index

    public function getCurrentLang () {

        return app()->getLocale();

    }
} // End of controller 
