<?php

namespace App\Http\Controllers\Admin\adminmenu;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus\Menu;



class MenuController extends Controller
{
    public function index(){
		return view('admin.menu.topmenu.index');
	}

    public function create(){
        return view('admin.menu.topmenu.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'link'=>'required',
            'status'=>'required',
            'meta_title'=>'required',
            'meta_keyboards'=>'required',
            'meta_description'=>'required',
        ]);
            Menu::create($request->all());
            return redirect()->back();
    }
    public function show($id){
        dd($id);
    }
}
