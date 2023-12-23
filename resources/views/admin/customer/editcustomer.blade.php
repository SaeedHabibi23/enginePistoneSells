

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form  action="../StoreUpdate" method="post">
    @csrf
    <input type="hidden" name="customer_id" value="{{$Customers->customer_id}}">
    <div>
        <label for="name">نام مشتری</label>
        <input type="text" id="name"  value="{{$Customers->customerName}}"  name="customerName" class="form-control">
    </div>
 آدرس ::<input type="text"  value="{{$Customers->customerAddress}}" name="customerAddress" class="form-control"><br>
 شماره تماس ::<input type="text" value="{{$Customers->CustomerPhone}}" name ="CustomerPhone" class="form-control"><br>
 آدرس دکان ::<input type="text"   value="{{$Customers->CustomerNameShop}}" name ="CustomerNameShop" class="form-control"><br>
 مقدار قرض ::<input type="number"  value="{{$Customers->mountborrow}}"  name ="mountborrow" class="form-control"><br>
 

 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection