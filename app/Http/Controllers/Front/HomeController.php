<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('front.pages.home');
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