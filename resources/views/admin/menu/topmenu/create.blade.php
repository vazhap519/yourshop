@extends('layouts.adminindex');
@section('content')
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">მენიუს დამატება</h6>
            <form action="{{route('menu_store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="menuName" class="form-label">მენიუს სახელი</label>
                    <input type="text" class="form-control" id="menuName" name="name">

                </div>
                <div class="mb-3">
                    <label for="menulink" class="form-label">მენის ბმული</label>
                    <input type="text" class="form-control" id="menulink" name="link">
                </div>

                <div class=" mb-3">
                    <label for="menuStatus">მენიუს სტატუსი</label>
                    <select class="form-select" id="menuStatus" name="status">
                        <option value="0">გამორთულია</option>
                        <option value="1">თართულია</option>
                    </select>
                    <div class="mb-3">
                        <label for="menu_meta_title" class="form-label">meta title</label>
                        <input type="text" class="form-control" id="menu_meta_title" name="meta_title">
                    </div>
                    <div class="mb-3">
                        <label for="menu_meta_keyboards" class="form-label">meta keyboards </label>
                        <input type="text" class="form-control" id="menu_meta_keyboards" name="meta_keyboards">
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">meta description </label>
                        <input type="text" class="form-control" id="meta_description" name="meta_description">
                    </div>
                    <button type="submit" class="btn btn-primary">მენიუს შექმნა</button>
            </form>
        </div>
    </div>






@endsection
