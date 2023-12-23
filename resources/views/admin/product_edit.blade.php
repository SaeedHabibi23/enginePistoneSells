

@extends('admin/master_admin')
@section('content')
<html >
<div class="form-group">
<form method="post" action="{{route('product_update',$edit->id)}}">
    @csrf
    <div>
        <label for="name">نام</label>
        <input type="text" id="name"   name="name" class="form-control" value="{{$edit->name}}">
    </div>
 company_name ::<input type="text" name="company_name" class="form-control"   value="{{$edit->company_name}}"><br>
 color_name ::<input type="text" name ="color" class="form-control" value="{{$edit->color}}"><br>
 amoubt_name ::<input type="number"   name ="amount" class="form-control " value="{{$edit->amount}}"><br>
 type ::<input type="text"   name ="type" class="form-control" value="{{$edit->type}}"><br>
 <input type="submit" value="sende" class="btn btn-primary">

</form>
</div>
                                </html>
                                @endsection