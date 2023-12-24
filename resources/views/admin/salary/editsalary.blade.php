

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
<form method="post" action="../StoreUpdatesalary">
    @csrf
    <input type="hidden" name="salary_id" value="{{$data['Salary']->salary_id}}" id="">
    <div>
        <label for="name">نام کارمند</label>
        <select name="employee_id" id="" class="form-control">
        @foreach($data['Employee'] as $Employe)
        <option value="{{$Employe->employee_id}}">{{$Employe->employeeName}}</option>
        @endforeach
        </select>
    </div>
    تاریخ شروع ::<input type="date" value="{{$data['Salary']->startdate}}" name ="startdate" class="form-control"><br>
    تاریخ ختم ::<input type="date" value="{{$data['Salary']->enddate}}"   name ="enddate" class="form-control"><br>
      مقدار::<input type="number" value="{{$data['Salary']->mount}}"   name ="mount" class="form-control"><br>
   توضیحات ::<input type="text" value="{{$data['Salary']->description}}" name="description" class="form-control"><br>


  


 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection