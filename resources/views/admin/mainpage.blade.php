
@extends('admin/master_admin')
@section('content')
<main class="bmd-layout-content">
            <div class="container-fluid ">
                <!-- content -->
                <!-- breadcrumb -->
                 
                <!-- widget -->
                <div class="row m-1 mb-2" >
                    <div class="col-xl-3 col-md-5 col-sm-5 p-2 bg-danger" style="margin-top:20px;background-color:orange;color:white;">
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i class="" style="font-size: 30px;width: 60px;height: 60px;line-height: 60px;" aria-hidden="true"></i>
                            <span class="mb-1 c-first" style="color:white;"> مشتریان  </span>
                            <span>{{$data['Customers']->count()}}</span>
                            <p class="mt-3 mb-1 text-right">
                                <a href="{{route('showcustomers')}}" class="nav-link"style="color:white;"> دیدن جزییات </a> 
                            </p>
                        </div>
                    </div>
                      
                   
                    <div class="col-xl-3 col-md-5 col-sm-5 p-2 bg-danger" style="margin-right:20px; margin-top:20px;background-color:orange;color:white;" >
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i class="" style="font-size: 30px;width: 60px;height: 60px;line-height: 60px;" aria-hidden="true"></i>
                            <span class="mb-1 c-third" style="color:white;">  محصولات </span>
                            <span>{{$data['Product']->count()}}</span>
                            <p class="mt-3 mb-1 text-right">
                            <a href="{{route('showproducts')}}" class="nav-link"style="color:white;"> دیدن جزییات  </a> 
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-5 col-sm-5 p-2 bg-danger" style="margin-top:20px;background-color:orange;color:white;" >
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i class="" style="font-size: 30px;width: 60px;height: 60px;line-height: 60px;" aria-hidden="true"></i>
                            <span class="mb-1 c-third" style="color:white;">  عواید  </span>
                            <span>{{$data['Earnings']->count()}}</span>
                            <p class="mt-3 mb-1 text-right">
                            <a href="{{route('show_earning')}}" class="nav-link"style="color:white;">  دیدن جزییات   </a>  
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-5 col-sm-5 p-2 bg-danger" style="margin-right:20px;margin-top:20px;background-color:orange;color:white;">
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i class="" style="font-size: 30px;width: 60px;height: 60px;line-height: 60px;" aria-hidden="true"></i>
                            <span class="mb-1 c-third" style="color:white;"> تعداد کارمندان    </span>
                            <span>{{$data['Employee']->count()}}</span>
                            <p class="mt-3 mb-1 text-right">
                            <a href="{{route('show_employee')}}" class="nav-link"style="color:white;"> دیدن جزییات   </a>  
                            </p>
                        </div>
                    </div>
                   
                    

                    <div class="col-xl-3 col-md-5 col-sm-5 p-2 bg-danger" style="margin-top:20px;background-color:orange;color:white;">
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i class="" style="font-size: 30px;width: 60px;height: 60px;line-height: 60px;" aria-hidden="true"></i>
                            <span class="mb-1 c-third" style="color:white;">  دفعات مصارف    </span>
                            <span>{{$data['expensive']->count()}}</span>
                            <p class="mt-3 mb-1 text-right">
                            <a href="{{route('show_expensive')}}" class="nav-link"style="color:white;">  دیدن جزییات   </a>  
                            </p>
                        </div>
                    </div>

                  
               

                 
                   
                    </div>

                  

                  
                </div>
            </div>
        </main>
    </div>

    </div>
@endsection