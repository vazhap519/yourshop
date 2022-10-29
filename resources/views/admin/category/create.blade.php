@extends('layouts.adminindex');
@section('content')
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">ცატეგორიის შექმნა</h6>
            <form action="{{route('category_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="categoryname" class="form-label">კატეგორიის სახელი</label>
                    <input type="text" class="form-control" id="categoryname" name="name">
                </div>
                <div class="mb-3">
                    <label for="categoryslug" class="form-label">კატეგორიის   ლინკი</label>
                    <input type="text" class="form-control" id="categoryslug" name="slug">
                </div>
                <div class="mb-3">
                    <label for="categorydescription" class="form-label">კატეგორიის   აღწერა</label>
                    <input type="text" class="form-control" id="categorydescription" name="description">
                </div>
                <div class="mb-3">
                    <label for="categoryimage" class="form-label">კატეგორიის   სურათი</label>
                    <input type="file" class="form-control" id="categoryimage" name="image">
                </div>

                <div class="mb-3">
                    <label for="category_meta_title" class="form-label">კატეგორიის   მეტა სათაური</label>
                    <input type="text" class="form-control" id="category_meta_title" name="meta_title">
                </div>
                <div class="mb-3">
                    <label for="category_meta_keyboards" class="form-label">კატეგორიის   მეტა სიტყვები</label>
                    <input type="text" class="form-control" id="category_meta_keyboards" name="meta_keyboards">
                </div>
                <div class="mb-3">
                    <label for="category_meta_description" class="form-label">კატეგორიის   მეტა აღწერა</label>
                    <input type="text" class="form-control" id="category_meta_description" name="meta_description">
                </div>
                <div class="mb-3">
                    <label for="category_status" class="form-label">კატეგორიის   მეტა აღწერა</label>
                    <input type="checkbox"  id="category_status" name="status">

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">პროდუქტის დამატება</button>
                </div>
            </form>
        </div>
        </div>
@endsection
