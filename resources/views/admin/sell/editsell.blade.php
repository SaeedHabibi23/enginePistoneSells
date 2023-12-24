

@extends('admin/master_admin')
@section('content')
<html >
<div class="row">

            
@if(session('status'))
          <div class="alert alert-success col-12" rol="alert" id="CanceldText" style="display:flex; justify-content: space-between;">
              {{session('status')}}
              <button class="btn-close me-auto btn btn-danger" onclick="CancelFunction()" id="CancelAlert" type="button" data-bs-dismiss="alert"> X </button>
          </div>
        
          @elseif(session('error'))
        
          <div class="alert alert-danger col-12" rol="alert" id="CanceldText" style="display:flex; justify-content: space-between;">
          {{session('error')}}
              <button class="btn-close me-auto btn btn-danger" onclick="CancelFunction()" id="CancelAlert" type="button" data-bs-dismiss="alert"> X </button>
          </div>
          @endif
          </div>
<div class="form-group row">
<form method="post" action="../StoreUpdatesell">
    @csrf
 
    <input type="hidden" name="sell_id" value="{{$data['Sell']->sell_id}}" id="">

   <div class="col-lg-6">
   محصول یک 
   <select name="ProductOne" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار اول 
        <input type="number" id="name" value="{{$data['Sell']->ProductcountOne}}"  name="ProductcountOne" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول دو 
   <select name="Producttwo" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار دوم 
        <input type="number" id="name" value="{{$data['Sell']->Productcounttwo}}"  name="Productcounttwo" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول سه 
   <select name="Productthree" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار سوم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountthree}}"   name="Productcountthree" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول چهار 
   <select name="Productfour" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار چهارم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountfour}}"   name="Productcountfour" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول پنج 
   <select name="Productfive" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار پنجم 
        <input type="number" id="name"  value="{{$data['Sell']->Productcountfive}}"  name="Productcountfive" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول شش 
   <select name="Productsix" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار ششم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountsex}}"   name="Productcountsex" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول هفت 
   <select name="Productseven" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار هفتم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountseven}}"  name="Productcountseven" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول هشت 
   <select name="Producteight" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار هشتم 
        <input type="number" id="name" value="{{$data['Sell']->Productcounteight}}"  name="Productcounteight" class="form-control">
    </div>
   <div class="col-lg-6">
   محصول نه 
   <select name="Productnine" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار نهم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountnine}}"  name="Productcountnine" class="form-control">
    </div>

   <div class="col-lg-6">
   محصول ده 
   <select name="Productten" id="" class="form-control">
        @foreach($data['Product'] as $Produc)
        <option value="{{$Produc->product_id}}">  {{$Produc->Product_Name}}  </option>
        @endforeach
    </select>
   </div>
   <div class="col-lg-6">
         مقدار دهم 
        <input type="number" id="name" value="{{$data['Sell']->Productcountten}}" name="Productcountten" class="form-control">
    </div>

 
    <div class="col-lg-6">
    نوعیت فروش 
    <select name="selltype" id="selltype" value="{{$data['Sell']->selltype}}" class="form-control">
        <option value="Naqd"> بصورت نقد </option>
        <option value="Borrow"> بصورت قرض </option>
    </select>
</div>

<div class="col-lg-6" id="customerNameDiv">
    نام مشتری 
    <input type="text" name="customerName" class="form-control">
</div>

<div class="col-lg-6" id="customerSelectDiv" style="display: none;">
    انتخاب مشتری 
    <select name="customer_id" id="customerSelect" class="form-control">
        @foreach($data['Customers'] as $Customer)
            <option value="{{$Customer->customer_id}}">  {{$Customer->customerName}}  </option>
        @endforeach
    </select>
</div>

<script>
    document.getElementById('selltype').addEventListener('change', function() {
        var selectedSellType = this.value;
        if (selectedSellType === 'Naqd') {
            document.getElementById('customerNameDiv').style.display = 'block';
            document.getElementById('customerSelectDiv').style.display = 'none';
        } else if (selectedSellType === 'Borrow') {
            document.getElementById('customerNameDiv').style.display = 'none';
            document.getElementById('customerSelectDiv').style.display = 'block';
        }
    });
</script>



    
    

 <input type="submit" value="sende" class="btn btn-primary" style="margin-top:18px;">

</form>
</div>
   </html>
                                
@endsection