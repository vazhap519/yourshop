@extends('.layouts.adminindex')
@section('content')

<table border="2" style="background: red">
    <tr style="border: 2px solid">
        <thead style="border: 2px solid">
        <th style="border: 2px solid">პროდუქტის სახელი</th>
        <th style="border: 2px solid">პროდუქტის აღწერა</th>
        <th style="border: 2px solid">პროდუქტის სტატუსი</th>
        <th style="border: 2px solid">პროდუქტის მდგომარეობა</th>
        <th style="border: 2px solid">პროდუქტის ფერები</th>
        <th style="border: 2px solid">პროდუქტის სურათი</th>
        <th style="border: 2px solid">პროდუქტის მეტის სახელი</th>
        <th style="border: 2px solid">პროდუქტის მეტის ქივორდები</th>
        <th style="border: 2px solid">პროდუქტის მეტის აღწერა</th>
        <th style="border: 2px solid">პროდუქტის ფასები</th>

        </thead>
    </tr>
    @foreach($products as $product)
    <tr>
        <tbody style="border: 2px solid">
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->status}}</td>
        <td>{{$product->condition}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->colors}}</td>
        <td><img src="{{asset('assets/images/product_images/'.$product->image)}}" style="width: 50px;height: 50px"></td>
        <td>{{$product->meta_title}}</td>
        <td>{{$product->meta_keyboads}}</td>
        <td>{{$product->meta_description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->sale_price}}</td>
        <td><a href="{{route('products_show',$product->id)}}" class="btn btn-danger">პროდუქტის ნახვა</a> </td>
        <td><a href="{{route('products_update',$product->id)}}" class="btn btn-dark">პროდუქტის რედაქტირება</a></td>
        </tbody>
    </tr>
    @endforeach
</table>

@endsection
