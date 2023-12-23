
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
        <th>نام</th>
        <th>نوعیت جنس</th>
        <th>قیمت خرید</th>
        <th>فیمت فروش</th>
        <th>درجن</th>
        <th>تعداد</th>
        <th>delete</th>
        <th>update</th>
       
        </tr>
        @foreach($saleshow as $value)
        <tr>
            <td> {{$value->id}}</td>
            <td> {{$value->name}}</td>
            <td> {{$value->type}}</td>
            
            <td> {{$value->price}}</td>
            <th>{{$value->sale}}</th>
            <th>{{$value->jem}}</th>
            <th>{{$value->amount}}</th>
            <td> <a href="{{route('sale_delete' ,$value->id)}}"  >delete</a></td>
            <td> <a href="{{route('sale_edit_form' ,$value->id)}}"  >update</a></td>
            

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection