@extends('layouts.adminindex');
@section('content')
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">კატეგორიები</h6>
            <a href="{{route('category_create')}}" class=" btn btn-success">მენიუს დამატება</a>
        </div>
@endsection
