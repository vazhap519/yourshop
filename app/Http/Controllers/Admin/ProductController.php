<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus\Menu;
use App\Models\Admin\Product;
use Faker\Core\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=(new Product())->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
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
            'quantity'=>'required',
            'colors'=>'required',
            'image'=>'required',
            'meta_title'=>'required',
            'meta_keyboards'=>'required',
            'meta_description'=>'required',
            'price'=>'required',
            'sale_price'=>'required',
        ]);
        $input=$request->all();
        if($image=$request->file('image')){
            $desrinationpath='assets/images/product_images';
            $productimage=date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($desrinationpath,$productimage);
            $input['image']="$productimage";

        }
        Product::create($input);
        return redirect()->back();

    }
    public function show(Product $product)
    {

        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.product.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
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
            'sale_price'=>'required',
        ]);
        $product=Product::findORFail($id);

        $input=$request->all();

        if($image=$request->file('image')){
            $desrinationpath='assets/images/product_images';
            $productimage=date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($desrinationpath,$productimage);
            $input['image']="$productimage";

        }
        $product->fill($input);
        $product->save();
        return redirect()->back();
    }


    public function destroy(int $id)
    {

        $product=(new Product())->find($id);
        $product->delete();
        return redirect()->back();

    }
}
