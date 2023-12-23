

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="{{route('product_amount_update',$product_edit->id)}}">
    @csrf
    <div>
        <label for="name">نام</label>
 <input type="number" id="name" name="product_id" class="form-control"  value="{{$product_edit->product_id}}">
    </div>
 company_name ::<input type="number" name="stok_id" class="form-control" value="{{$product_edit->stok_id}}"><br>
 color_name ::<input type="number" name ="amount" class="form-control" value="{{$product_edit->amount}}"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection