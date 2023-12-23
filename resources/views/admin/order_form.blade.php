

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="order_add">
    @csrf
    <div>
        <label for="name">ordernumber</label>
        <input type="number" id="name"   name="order_number" class="form-control">
    </div>
 total_price ::<input type="number" name="total_price" class="form-control"><br>
 payment_price ::<input type="number" name ="payment_price" class="form-control"><br>
 remin_price ::<input type="number"   name ="remine_price" class="form-control"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection