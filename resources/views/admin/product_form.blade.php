

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="product_insert1">
    @csrf
    <div>
        <label for="name">نام</label>
        <input type="text" id="name"   name="name" class="form-control">
    </div>
 نوعیت جنس <input type="text" name="type" class="form-control"><br>
 قیمت خرید <input type="number" name ="price" class="form-control"><br>
 قیمت فر وش<input type="number"   name ="sale" class="form-control"><br>
 
  درجن<input type="number"   name ="jem" class="form-control"><br>
  عدد<input type="number"   name ="amount" class="form-control"><br>
  کتگوری
  <br><select class="form-select" aria-label="Default select example" name="category">
      <option>انتخاب کتگوری</option>
  @foreach($categories as $category)
  <option value="{{$category->name}}">{{$category->name}}</option>
  <input type="hidden" name="category_id" value="{{$category->id}}">
  @endforeach
</select>
 <input type="submit" value="send" class="btn btn-primary">

 <!-- <select name="" id=""> 
     @foreach($categories as $catgory) 
     <option value="" >{{$catgory->name}}</option> 
     @endforeach
    </select>  -->
</form>
</div>
                                </html>
                                @endsection