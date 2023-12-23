

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="{{route('sale_update' , $saleedit->id)}}">
    @csrf
    <div>
        <label for="name">نام</label>
        <input type="number" id="name"   name="sale_number" class="form-control" value="{{$saleedit->sale_number}}">
    </div>
 company_name ::<input type="number" name="total_price" class="form-control" value="{{$saleedit->total_price}}"><br>
 color_name ::<input type="number" name ="payment_price" class="form-control" value="{{$saleedit->payment_price}}">><br>
 amoubt_name ::<input type="number"   name ="remine_price" class="form-control"  value="{{$saleedit->remin_price}}">><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection