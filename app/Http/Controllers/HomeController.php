<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function index(){
		return view('frontend.index');
	}
	public function about(){
		return view('frontend.about');
	}
	public function checkout(Product $products){
		return view('frontend.checkout',compact('products'));
	}
	public function sale(){

		return view('frontend.sale');
	}
	public function shop(){
        $products= (new Product())->get();
		return view('frontend.shop',compact('products'));
	}
	public function single(Product $products){

		return view('frontend.single',compact('products'));
	}


}
