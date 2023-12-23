

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="{{route('order_asset_update',$orasset->id)}}">
    @csrf
    <div>
        <label for="name">order_id</label>
        <input type="number" id="name"   name="order_id" class="form-control" value="{{$orasset->order_id}}">
    </div>
 product_id ::<input type="number" name="product_id" class="form-control" value="{{$orasset->product_id}}"><br>
 stock_id ::<input type="number" name ="stock_id" class="form-control" value="{{$orasset->stock_id}}"><br>
 price ::<input type="number"   name ="price" class="form-control" value="{{$orasset->price}}"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection