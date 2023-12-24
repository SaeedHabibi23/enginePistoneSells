<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da;
    }
</style>
</head>
<body>

<section class="mt-5">
    <div class="container" dir="rtl">
        <div class="row" id="print">
            <h3 class=" mb-1 bg-dark text-white"> لیست اقلام: 
            @if($data['Sell']->customerName == '')
                @foreach($data['Customers'] as $customer)
                    @if($customer->customer_id == $data['Sell']->customer_id)
                        {{$customer->customerName}}
                    @endif
                @endforeach
            @else
                {{$data['Sell']->customerName}}
            @endif

            </h3>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                <th>نام محصول</th>
                <th>تعداد</th>
                <th>قیمت فی</th>
                <th>قیمت کل</th>
                <th>تاریخ</th>
                </thead>
                <tbody>
                    @if($data['Sell']->ProductOne != ''  && $data['Sell']->countone != 0)
                    <tr>
                        <td>{{$data['Sell']->ProductOne}}</td>
                        <td>{{$data['Sell']->countone}}</td>
                        <td>{{$data['Sell']->priceonefe}}</td>
                        <td>{{$data['Sell']->ProductcountOne}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Producttwo != '' && $data['Sell']->counttwo != 0)
                    <tr>
                        <td>{{$data['Sell']->Producttwo}}</td>
                        <td>{{$data['Sell']->counttwo}}</td>
                        <td>{{$data['Sell']->pricetwofe}}</td>
                        <td>{{$data['Sell']->Productcounttwo}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productthree != '' && $data['Sell']->countthree != 0)
                    <tr>
                        <td>{{$data['Sell']->Productthree}}</td>
                        <td>{{$data['Sell']->countthree}}</td>
                        <td>{{$data['Sell']->pricethreefe}}</td>
                        <td>{{$data['Sell']->Productcountthree}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productfour != '' && $data['Sell']->countfour != 0)
                    <tr>
                        <td>{{$data['Sell']->Productfour}}</td>
                        <td>{{$data['Sell']->countfour}}</td>
                        <td>{{$data['Sell']->pricefourfe}}</td>
                        <td>{{$data['Sell']->Productcountfour}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
              
                    @if($data['Sell']->Productfive != '' && $data['Sell']->countfive != 0)
                    <tr>
                        <td>{{$data['Sell']->Productfive}}</td>
                        <td>{{$data['Sell']->countfive}}</td>
                        <td>{{$data['Sell']->pricefivefe}}</td>
                        <td>{{$data['Sell']->Productcountfive}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productsix != ''  && $data['Sell']->countsix != 0)
                    <tr>
                        <td>{{$data['Sell']->Productsix}}</td>
                        <td>{{$data['Sell']->countsix}}</td>
                        <td>{{$data['Sell']->pricesixfe}}</td>
                        <td>{{$data['Sell']->Productcountsex}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productseven != ''  && $data['Sell']->countseven != 0)
                    <tr>
                        <td>{{$data['Sell']->Productseven}}</td>
                        <td>{{$data['Sell']->countseven}}</td>
                        <td>{{$data['Sell']->pricesevenfe}}</td>
                        <td>{{$data['Sell']->Productcountseven}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Producteight != ''  && $data['Sell']->counteight != 0)
                    <tr>
                        <td>{{$data['Sell']->Producteight}}</td>
                        <td>{{$data['Sell']->counteight}}</td>
                        <td>{{$data['Sell']->priceeightfe}}</td>
                        <td>{{$data['Sell']->Productcountnine}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productnine != ''  && $data['Sell']->countnine != 0)
                    <tr>
                        <td>{{$data['Sell']->Productnine}}</td>
                        <td>{{$data['Sell']->countnine}}</td>
                        <td>{{$data['Sell']->priceninefe}}</td>
                        <td>{{$data['Sell']->Productcounteight}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    @if($data['Sell']->Productten != ''  && $data['Sell']->countten != 0)
                    <tr>
                        <td>{{$data['Sell']->Productten}}</td>
                        <td>{{$data['Sell']->countten}}</td>
                        <td>{{$data['Sell']->pricetenfe}}</td>
                        <td>{{$data['Sell']->Productcountten}}</td>
                        <td>{{$data['Sell']->product_date_sold}}</td>
                    </tr>
                    @endif
                    <tr>
                        <td colspan="5" class="text-center"> قیمت مجموع: {{$data['Sell']->totalprice}}</td>
                        
                    </tr>
                </tbody>
            </table>

        
           
        </div>
    </div>
    <h3 class="text-center">
    <a href="#" id="printLink" class="btn btn-info"> چاپ کردن </a>
    </h3>
</section>

<script>
    // اضافه کردن یک رویداد کلیک به لینک
    document.getElementById('printLink').addEventListener('click', function() {
        // چاپ کردن محتوای دیو
        window.print();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>