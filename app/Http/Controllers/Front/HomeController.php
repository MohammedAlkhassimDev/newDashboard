<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $banners = Banner::get();
        $products = Product::get();
        $categories = Category::get();
        $brands = Brand::get();
        return view('front.pages.home' , compact('banners' , 'products' , 'categories' , 'brands') ,);
    }

    public function shop(){
        return view('front.pages.shop');
    }


    public function contact(){
        return view('front.pages.contact');
    }


    public function about(){
        return view('front.pages.about');
    }


    public function cart(){
        return view('front.pages.cart');
    }


    public function checkout(){
        return view('front.pages.checkout');
    }

    public function detail(){
        return view('front.pages.detail');
    }

    public function compare(){
        return view('front.pages.compare');
    }

    public function faq(){
        return view('front.pages.faq');
    }
}