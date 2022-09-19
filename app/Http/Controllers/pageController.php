<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
  public function index(){
      return view('pages.index');
  }
  public function shop(){
      return view('pages.shop.shop');
  }
  public function about(){
      return view('pages.shop.about');
  }
  public function sale(){
      return view('pages.shop.sale');
  }
    public function single(){
        return view('pages.shop.single');
    }
}
