

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
<form method="post" action="savecustomer">
    @csrf
    <div>
        <label for="name">نام مشتری</label>
        <input type="text" id="name"   name="customerName" class="form-control">
    </div>
 آدرس ::<input type="text" name="customerAddress" class="form-control"><br>
 شماره تماس ::<input type="text" name ="CustomerPhone" class="form-control"><br>
 آدرس دکان ::<input type="text"   name ="CustomerNameShop" class="form-control"><br>
 مقدار قرض ::<input type="number"   name ="mountborrow" class="form-control"><br>
 




 
 <input type="submit" value="ذخیره" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection