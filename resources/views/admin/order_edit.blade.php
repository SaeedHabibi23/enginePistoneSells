

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="{{route('order_delete' , $orderedit->id)}}">
    @csrf
    <div>
        <label for="name">ordernumber</label>
        <input type="number" id="name"   name="order_number" class="form-control" value="{{$orderedit->order_number}}">
    </div>
 total_price ::<input type="number" name="total_price" class="form-control" value="{{$orderedit->total_price}}"><br>
 payment_price ::<input type="number" name ="payment_price" class="form-control" value="{{$orderedit->payment_price}}"><br>
 remin_price ::<input type="number"   name ="remine_price" class="form-control" value="{{$orderedit->remine_price}}">
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection