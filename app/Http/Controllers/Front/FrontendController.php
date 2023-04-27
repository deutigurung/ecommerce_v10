<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::active()->take(6)->get();
        return view('frontend.index',compact('products'));
    }

    public function productPage(){
        $products = Product::active()->get();
        return view('frontend.product',compact('products'));
    }

    public function aboutPage(){
        return view('frontend.about');
    }

    public function whyPage(){
        return view('frontend.why');
    }

    public function testimonialPage(){
        return view('frontend.testimonial');
    }
}
