
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
        <th>شماره تماس</th>
        <th> مقدار معاش </th>
        <th> باقی مانده معاش </th>
        <th> آدرس </th>
        <th> عمل </th>

        </tr>
        @foreach($Employee as $Employe)
        <tr>
            <td> {{$Employe->employeeName}}</td>
            <td> {{$Employe->EmployeePhone}}</td>
            <td> {{$Employe->EmployeeSalary}}</td>
            
            <td> {{$Employe->remainSalary}}</td>
            <td> {{$Employe->EmployeeAddress}}</td>
            




            <td> <a href="/employeedelete/{{ $Employe->employee_id }}"  >delete</a></td>
<td> <a href="/employeetedit/{{ $Employe->employee_id }}"  >update</a></td>

        </tr>
@endforeach
                        </table>
</body>
</html>
@endsection