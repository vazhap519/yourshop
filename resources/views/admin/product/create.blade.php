@extends('layouts.adminindex');
@section('content')
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">პროდუქტის დამატება</h6>
            <form action="{{route('products_store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="productname" class="form-label">პროდუქტის  სახელი</label>
                    <input type="text" class="form-control" id="productname" name="name">
                </div>
                <div class="mb-3">
                    <label for="product_description" class="form-label">პროდუქტის  აღწერა</label>
                    <textarea type="text" class="form-control" id="product_description" name="description"></textarea>
                </div>

                <div class=" mb-3">
                    <label for="product_status">პროდუქტის  სტატუსი</label>
                    <select class="form-select" id="product_status" name="status">
                        <option value="0">არ არის მარაგში</option>
                        <option value="1">არის მარაგში</option>
                    </select>
                </div>
                    <div class=" mb-3">
                        <label for="product_status">პროდუქტის  მდგომარეობა</label>
                        <select class="form-select" id="product_status" name="condition">
                            <option value="0">მეორადი</option>
                            <option value="1">ახალი</option>
                        </select>
                    </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">რაოდენობა</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
                    <div class="mb-3">
                        <label for="colors" class="form-label">ფერები</label>
                        <input type="text" class="form-control" id="colors" name="colors">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label"> სურათი</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">meta_title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title">
                    </div>
                    <div class="mb-3">
                        <label for="meta_keyboards" class="form-label">meta_keyboards</label>
                        <input type="text" class="form-control" id="meta_keyboards" name="meta_keyboards">
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">meta_description</label>
                        <textarea  class="form-control" id="meta_description" name="meta_description"></textarea>
                    </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">ფასი</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">ფასდაკლება</label>
                            <input type="text" class="form-control" id="sale_price" name="sale_price">
                        </div>
                        <div class="mb-3">
                    <button type="submit" class="btn btn-primary">პროდუქტის დამატება</button>
                        </div>
            </form>
    </div>
@endsection
