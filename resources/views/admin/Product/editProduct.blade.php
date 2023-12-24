

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form  action="../StoreUpdateproduct" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{$Product->product_id}}">
    <div>
        <label for="name">نام محصول</label>
        <input type="text" id="name" value="{{$Product->Product_Name}}"   name="Product_Name" class="form-control">
    </div>
 مقدار ::<input type="number"value="{{$Product->product_count}}"  name="product_count" class="form-control"><br>
  قیمت خرید ::<input type="number" value="{{$Product->product_buyPrice}}" name ="product_buyPrice" class="form-control"><br>
  قیمت فروش ::<input type="number" value="{{$Product->product_soldprice}}"   name ="product_soldprice" class="form-control"><br>
 


 <input type="submit" value="ذخیره" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection