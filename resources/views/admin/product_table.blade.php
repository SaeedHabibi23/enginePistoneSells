
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
        <th>نوعیت</th>
        <th>فیمت خرید</th>
        <th>قیمت فروش</th>
        <th>درجن</th>
        <th>تعداد</th>
        

        <th>ویرایش</th>
        <th>حذف</th>
        </tr>
        @foreach($data as $value)
        <tr>
            <td> {{$value->id}}</td>
            <td> {{$value->name}}</td>
            <td> {{$value->type}}</td>
            <td> {{$value->price}}</td>
            <td> {{$value->sale}}</td>
            <td> {{$value->jem}}</td>
            <td> {{$value->amount}}</td>
            <td> <a href="{{route('product_edit' , $value->id)}}"  >ویرایش</a></td>
            <td> <a href="{{route('product_delete',$value->id)}}"  >حذف</a></td>

            

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection