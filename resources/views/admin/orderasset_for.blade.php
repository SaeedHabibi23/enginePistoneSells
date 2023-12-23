

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="order_asset_add">
    @csrf
    <div>
        <label for="name">order_id</label>
        <input type="number" id="name"   name="order_id" class="form-control">
    </div>
 product_id ::<input type="number" name="product_id" class="form-control"><br>
 stock_id ::<input type="number" name ="stock_id" class="form-control"><br>
 price ::<input type="number"   name ="price" class="form-control"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection