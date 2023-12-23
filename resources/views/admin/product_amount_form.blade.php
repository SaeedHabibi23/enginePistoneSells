

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="product_insert">
    @csrf
    <div>
        <label for="name">نام</label>
        <input type="number" id="name"   name="product_id" class="form-control">
    </div>
 company_name ::<input type="number" name="stok_id" class="form-control"><br>
 color_name ::<input type="number" name ="amount" class="form-control"><br>
 
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection