@extends('layouts.adminindex');
@section('content')
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">პროდუქტის რედაქტირება</h6>
            <form action="{{route('products_update',$item->id)}}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="productname" class="form-label">პროდუქტის  სახელი</label>
                    <input type="text" class="form-control" id="productname" name="name" value="{{$item->name}}">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">პროდუქტის  აღწერა</label>
                    <textarea type="text" class="form-control" id="product_description" name="description" >{{$item->description}}</textarea>
                </div>

                <div class=" mb-3">
                    <label for="product_status">პროდუქტის  სტატუსი</label>
                    <select class="form-select" id="product_status" name="status" {{$item->status=='1' ? 'selected' : ''}}>
                        <option value="0">არ არის მარაგში</option>
                        <option value="1">არის მარაგში</option>
                    </select>
                </div>
                <div class=" mb-3">
                    <label for="product_condition">პროდუქტის  მდგომარეობა</label>
                    <select class="form-select" id="product_condition" name="condition" {{$item->condition=='1' ? 'selected' : ''}}>
                        <option value="0">მეორადი</option>
                        <option value="1">ახალი</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">რაოდენობა</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$item->quantity}}">
                </div>
                <div class="mb-3">
                    <label for="colors" class="form-label">ფერები</label>
                    <input type="text" class="form-control" id="colors" name="colors" value="{{$item->colors}}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label"> სურათი</label>
                    <input type="file" class="form-control" id="image" name="image" value="">
                    <img src="{{asset('assets/images/product_images/'.$item->image)}}">
                </div>
                <div class="mb-3">
                    <label for="meta_title" class="form-label">meta_title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$item->meta_title}}">
                </div>
                <div class="mb-3">
                    <label for="meta_keyboards" class="form-label">meta_keyboards</label>
                    <input type="text" class="form-control" id="meta_keyboards" name="meta_keyboards" value="{{$item->meta_keyboards}}">
                </div>
                <div class="mb-3">
                    <label for="meta_description" class="form-label">meta_description</label>
                    <textarea  class="form-control" id="meta_description" name="meta_description">{{$item->meta_title}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">ფასი</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$item->price}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">ფასდაკლება</label>
                    <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{$item->sale_price}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">პროდუქტის განახლება</button>
                </div>
            </form>
        </div>
@endsection


