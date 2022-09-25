<?php

namespace App\Http\Controllers;

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
	public function checkout(){
		return view('frontend.checkout');
	}
	public function sale(){
		return view('frontend.sale');
	}
	public function shop(){
		return view('frontend.shop');
	}
	public function single(){
		return view('frontend.single');
	}


}
