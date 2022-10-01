@extends('.layouts.adminindex')
@section('content')

<table>
    <tr>
        <thead>
        <th>პროდუქტის სახელი</th>
        <th>პროდუქტის აღწერა</th>
        <th>პროდუქტის სტატუსი</th>
        <th>პროდუქტის მდგომარეობა</th>
        <th>პროდუქტის ფერები</th>
        <th>პროდუქტის სურათი</th>
        <th>პროდუქტის მეტის სახელი</th>
        <th>პროდუქტის მეტის ქივორდები</th>
        <th>პროდუქტის მეტის აღწერა</th>
        <th>პროდუქტის ფასები</th>

        </thead>
    </tr>
    @foreach($products as $product)
    <tr>
        <tbody>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->status}}</td>
        <td>{{$product->condition}}</td>
        <td>{{$product->colors}}</td>
        <td>{{$product->image}}</td>
        <td>{{$product->meta_title}}</td>
        <td>{{$product->meta_keyboads}}</td>
        <td>{{$product->meta_description}}</td>
        <td>{{$product->price}}</td>
        </tbody>
    </tr>
    @endforeach
</table>

@endsection
