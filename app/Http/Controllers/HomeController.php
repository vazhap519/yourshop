<?php

namespace App\Http\Controllers;

use App\Models\Admin\products;
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
	public function checkout(products $products){
		return view('frontend.checkout',compact('products'));
	}
	public function sale(){

		return view('frontend.sale');
	}
	public function shop(){
        $products= (new products())->get();
		return view('frontend.shop',compact('products'));
	}
	public function single(products $products){

		return view('frontend.single',compact('products'));
	}


}
