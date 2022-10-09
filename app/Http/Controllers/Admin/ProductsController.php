<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus\Menu;
use App\Models\Admin\Product;
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
            $productsimage=date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($desrinationpath,$productsimage);
            $input['image']="$productsimage";

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
    return view('admin.product.edit',compact('product'));

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
//            'image'=>'required',
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
            $productsimage=date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($desrinationpath,$productsimage);
            $input['image']="$productsimage";

        }
$product->fill($input);
      $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product , int $id)
    {
        $product=Product::find($id);
        $product->delete($id);
    }
}
