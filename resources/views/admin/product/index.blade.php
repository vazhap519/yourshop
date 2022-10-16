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
    @foreach($products as $item)
    <tr>
        <tbody style="border: 2px solid">
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->condition}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->colors}}</td>
        <td><img src="{{asset('assets/images/product_images/'.$item->image)}}" style="width: 50px;height: 50px"></td>
        <td>{{$item->meta_title}}</td>
        <td>{{$item->meta_keyboads}}</td>
        <td>{{$item->meta_description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->sale_price}}</td>
        <td><a href="{{route('products_show',$item->id)}}" class="btn btn-danger">პროდუქტის ნახვა</a> </td>
        <td><a href="{{route('products_edit',$item->id)}}" class="btn btn-dark">პროდუქტის რედაქტირება</a></td>
        <td>
          <form action="{{route('product_delete',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button  class="btn btn-dark">პროდუქტის წაშლა</button>
          </form>

        </td>
        </tbody>
    </tr>
    @endforeach
</table>
@endsection
