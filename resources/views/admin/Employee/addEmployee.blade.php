

@extends('admin/master_admin')
@section('content')
<html >
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
<div class="form-group">
<form method="post" action="saveemployee">
    @csrf
    <div>
        <label for="name">نام کارمند</label>
        <input type="text" id="name"   name="employeeName" class="form-control">
    </div>
   شماره تماس ::<input type="text" name ="EmployeePhone" class="form-control"><br>
   معاش کارمند ::<input type="number"   name ="EmployeeSalary" class="form-control"><br>
    باقی مانده معاش ::<input type="number"   name ="remainSalary" class="form-control"><br>
  آدرس کارمند ::<input type="text" name="EmployeeAddress" class="form-control"><br>


  


 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection