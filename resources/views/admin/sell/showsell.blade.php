
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
<div class="row">

            
@if(session('status'))
          <div class="alert alert-success col-12" rol="alert" id="CanceldText" style="display:flex; justify-content: space-between;">
              {{session('status')}}
              <button class="btn-close me-auto btn btn-danger" onclick="CancelFunction()" id="CancelAlert" type="button" data-bs-dismiss="alert"> X </button>
          </div>
        
          @elseif(session('error'))
        
          <div class="alert alert-danger col-12" rol="alert" id="CanceldText" style="display:flex; justify-content: space-between;">
          {{session('error')}}
              <button class="btn-close me-auto btn btn-danger" onclick="CancelFunction()" id="CancelAlert" type="button" data-bs-dismiss="alert"> X </button>
          </div>
          @endif
          </div>
    <table class="table table-bordered">
        <tr>
        <th>تعداد</th> 
        <th>تاریخ فروش</th>
        <th> محصول یک </th>
        <th> محصول دو </th>
        <th>محصول سه</th> 
        <th>محصول سه</th>
        <th> محصول چهار </th>
        <th> محصول پنج </th>
        <th>محصول شش</th> 
        <th>محصول هفت</th>
        <th> محصول هشت </th>
        <th> محصول نه </th>
        <th>محصول ده</th> 
        <th>نام محصول</th>
        <th> نام مشتری </th>
        <th> عمل </th>

        </tr>
        @foreach($Sell as $Produc)
        <tr>
            <td> {{$Produc->product_count}}</td>
            <td> {{$Produc->product_date_sold}}</td>
            <td> {{$Produc->ProductOne}}</td>
            
            <td> {{$Produc->Producttwo}}</td>
            <td> {{$Produc->Productthree}}</td>
            <td> {{$Produc->Productfour}}</td>
            <td> {{$Produc->Productfive}}</td>
            
            <td> {{$Produc->Productsix}}</td>

            
            <td> {{$Produc->Productseven}}</td>
            
            <td> {{$Produc->Producteight}}</td>
            <td> {{$Produc->Productnine}}</td>
            <td> {{$Produc->Productten}}</td>
            <td> {{$Produc->product_id}}</td>
            
            <td> {{$Produc->customerName}}</td>













            <td> <a href="/Producdelete/{{ $Produc->product_id }}"  >جزییات</a></td>



            <td> <a href="/Producdelete/{{ $Produc->product_id }}"  >delete</a></td>
<td> <a href="/productedit/{{ $Produc->product_id }}"  >update</a></td>

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection