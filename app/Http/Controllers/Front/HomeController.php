<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        $user = Auth::user();

        $banners = Banner::get();
        $products = Product::where('status', 'active') -> get();
        
        $categories = Category::get();
        $brands = Brand::get();
        return view('front.pages.home' , compact('banners' , 'products' , 'categories' , 'brands'));
    }

    public function shop(){

        $categories = Category::get();

        $products = Product::get();

        return view('front.pages.shop' , compact('categories' , 'products'));
    }


    public function shopWithOneCategory($id){

    $products = Product::where('cat_id' , $id)->get();

    return view('front.pages.shop-category' , compact( 'products'));
}

    public function contact(){
        return view('front.pages.contact');
    }

    public function thank(){
        return view('front.pages.thank');
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

    public function detail($slug){
        $product = Product::where('slug' , $slug)->get();
        return view('front.pages.detail' , compact('product'));
    }

    public function compare(){
        return view('front.pages.compare');
    }

    public function faq(){
        return view('front.pages.faq');
    }

    public function profile(){

        $userId = Auth::id();

        $orders = Order::where('user_id' , $userId)->get();

        return view('front.pages.profile' , compact('orders'));
    }
}
