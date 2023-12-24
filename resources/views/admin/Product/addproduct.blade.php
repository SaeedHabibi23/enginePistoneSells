

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
<form method="post" action="saveproduct">
    @csrf
    <div>
        <label for="name">نام محصول</label>
        <input type="text" id="name"   name="Product_Name" class="form-control">
    </div>
 مقدار ::<input type="number" name="product_count" class="form-control"><br>
  قیمت خرید ::<input type="number" name ="product_buyPrice" class="form-control"><br>
  قیمت فروش ::<input type="number"   name ="product_soldprice" class="form-control"><br>
 




 
 <input type="submit" value="ذخیره" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection