<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $articles = Post::with(['comments','user','image','category','competences'])->paginate(4);  
        return view('home', compact('articles')); 
    }
    
    public function products() {
        $products = Product::all();
        return view('front.products', compact('products'));
    }
    
    public function product($id) {
        $product = Product::find($id);
//        dump($product);
//        die();
        return view('front.product', compact('product')); 
    }
}
