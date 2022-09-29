@extends('.layouts.adminindex')
@section('content')
    @foreach($products as $product)
        {{$product->image}}
@endsection
