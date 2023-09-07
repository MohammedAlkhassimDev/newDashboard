<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['changeLang']);
        // auth:api
    } // construct 

    public function index(Request $request) {
        // if ( $request->header('lang'))
        //     return $request->header('lang');
        // else 
        //     return "no header set";
        // app() -> setLocale('en');
        return app() -> getLocale();
        $categories = Category::get();

        return response() -> json(['data' => $categories,  'status' => true]);

    } // End of index

    public function getCurrentLang () {

        return app()->getLocale();

    }
} // End of controller 
