<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus\Menu;
use App\Models\Admin\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=(new products())->get();
        return view('.admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('.admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
            'condition'=>'required',
            'colors'=>'required',
            'image'=>'required',
            'meta_title'=>'required',
            'meta_keyboards'=>'required',
            'meta_description'=>'required',
            'price'=>'required',
        ]);
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/img/productsimages';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $products['image'] = "$profileImage";
        }else{
            unset($products['image']);
        }
        $products->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('.admin.products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
            'condition'=>'required',
            'colors'=>'required',
            'image'=>'required',
            'meta_title'=>'required',
            'meta_keyboards'=>'required',
            'meta_description'=>'required',
            'price'=>'required',
        ]);
        if ($image = $request->file('image')) {
            $destinationPath = 'admin/assets/img/productsimages';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }

        $products->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
