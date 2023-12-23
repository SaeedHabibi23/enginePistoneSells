
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
        <th>نام</th> 
        <th>آدرس</th>
        <th>شماره تماس</th>
        <th>آدرس دکان</th>
        <th>مقدار قرض</th>
        <th> ویراییش </th>

        </tr>
        @foreach($Customers as $Customer)
        <tr>
            <td> {{$Customer->customerName}}</td>
            <td> {{$Customer->customerAddress}}</td>
            <td> {{$Customer->CustomerPhone}}</td>
            
            <td> {{$Customer->CustomerNameShop}}</td>

            <td> {{$Customer->mountborrow}}</td>
            




            <td> <a href="/customerdelete/{{ $Customer->customer_id }}"  >delete</a></td>
<td> <a href="/customeredit/{{ $Customer->customer_id }}"  >update</a></td>

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection