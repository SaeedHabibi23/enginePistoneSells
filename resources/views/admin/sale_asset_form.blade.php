

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="sale_asset_add">
    @csrf
    <div>
        <label for="">product_id</label>
        <input type="number"    name="product_id" class="form-control">
    </div>
 stock_id ::<input type="number" name="stock_id" class="form-control"><br>
 <!--sale_id ::<input type="number" name ="sale_id" class="form-control"><br>-->
 price ::<input type="number"   name ="price" class="form-control"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection