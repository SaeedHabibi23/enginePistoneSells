

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="sale_insert">
    @csrf
    <div>
        <label for="name">نام</label>
        <input type="text" id="name"   name="name" class="form-control">
    </div>
  نوعیت<input type="text" name="type" class="form-control"><br>
   قیمت خرید<input type="number" name ="price" class="form-control"><br>
 فیمت فروش  <input type="number"   name ="sale" class="form-control"><br>
 درجن       <input type="number"   name ="jem" class="form-control"><br>
        تعداد<input type="number"   name ="amount" class="form-control"><br>
<input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection