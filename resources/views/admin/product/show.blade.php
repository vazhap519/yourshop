@extends('.layouts.adminindex')
@section('content')

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

        </tbody>
    </tr>

@endsection
