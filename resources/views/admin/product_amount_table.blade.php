
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
        <th>product_id</th>
        <th>stok_id</th>
        <th>amount</th>
        <th>delete</th>
        <th>update</th>
       
        </tr>
        @foreach($product_amount as $value)
        <tr>
            <td> {{$value->id}}</td>
            <td> {{$value->product_id}}</td>
            <td> {{$value->stok_id}}</td>
            
            <td> {{$value->amount}}</td>
           
            <td> <a href="{{route('product_amount_delete' ,$value->id )}}"  >delet</a></td>
            <td> <a href="{{route('product_amount_edit',$value->id)}}"  >update</a></td>
            

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection