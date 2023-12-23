

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
<form method="post" action="../StoreUpdateEarning">
    @csrf
    <input type="hidden" name="earning_id" value="{{$Earnings->earning_id}}">
    <div>
        <label for="name"> قیمت </label>
        <input type="text" id="number" value="{{$Earnings->price}}"   name="price" class="form-control">
    </div>
 تاریخ <input type="date" value="{{$Earnings->date}}" name="date" class="form-control"><br>
   توضیحات <input type="text" value="{{$Earnings->description}}" name ="description" class="form-control"><br>
 




 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection