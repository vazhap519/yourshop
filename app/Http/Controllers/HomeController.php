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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
	public function index(){
		return view('frontend.index');
	}
//	public function shop(){
//		return view('pages.shop.shop');
//	}
//	public function about(){
//		return view('pages.shop.about');
//	}
//	public function sale(){
//		return view('pages.shop.sale');
//	}
//	public function single(){
//		return view('pages.shop.single');
//	}
}
