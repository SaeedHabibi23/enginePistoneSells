@extends('admin/master_admin')
@section('content')
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>category</th>
                    <th>amount</th>
                    </thead>
                </tr>
                @foreach($showpro as $value)
                <tr>
                <td> {{$value->id}} </td>
                <td> {{$value->name}} </td>
                <td> {{$value->amount}}</td>
                </tr>
                @endforeach
                
        </table>
    </div>
</div>
@endsection