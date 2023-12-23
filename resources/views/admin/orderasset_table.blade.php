
@extends('admin/master_admin')
@section('content')
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered">
        <tr>
        <th>Id</th> 
        <th>sale_number</th>
        <th>total_price</th>
        <th>payment_price</th>
        <th>remine_price</th>
        <th>delete</th>
        <th>update</th>
       
        </tr>
        @foreach($orderassetshow as $value)
        <tr>
            <td> {{$value->id}}</td>
            <td> {{$value->product_id}}</td>
            <td> {{$value->stock_id}}</td>
            <td> {{$value->order_id}}</td>
            <td> {{$value->price}}</td>
           
           
            <td> <a href="{{route('order_asset_edit',$value->id)}}"  >update</a></td>
            <td> <a href="{{route('order_asset_delete' ,$value->id)}}"  >delete</a></td>
            

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection 