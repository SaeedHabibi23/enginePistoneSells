<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell;
use App\Models\Product;
use App\Models\Customers;
use Carbon\Carbon;


class SellController extends Controller
{
   
    public function showsell(){
        $Sell = Sell::all();
        return view('admin/sell/showsell' , compact('Sell'));

    }  
    public function addsell(){

        $Product = Product::all();
        $Customers = Customers::all();

        $data = [
            'Product' => $Product , 
            'Customers' => $Customers
        ];
        return view('admin/sell/addsell' , compact('data'));
    }
    public function savesell(Request $request){
        $request->validate([
            'product_count' => "nullable" ,
            'product_date_sold' => "nullable" ,
            'ProductcountOne' => "nullable",
            'Productcounttwo' => "nullable",
            'Productcountthree' => "nullable",
            'Productcountfour' => "nullable",
            'Productcountfive' => "nullable",
            'Productcountsex' => "nullable",
            'Productcountseven' => "nullable",
            'Productcountnine' => "nullable",
            'Productcounteight' => "nullable",
            'Productcountten' => "nullable",
            'ProductOne' => "nullable" ,
            'Producttwo' => "nullable" ,
            'Productthree' => "nullable" ,
            'Productfour' => "nullable" ,
            'Productfive' => "nullable" ,
            'Productsix' => "nullable" ,
            'Productseven' => "nullable" ,
            'Producteight' => "nullable" ,
            'Productnine' => "nullable" ,
            'Productten' => "nullable" ,
            'selltype' => "nullable" ,
            'customerName' => "nullable" ,
        ]);
        $Sell = new Sell();
        $Sell->product_date_sold = Carbon::now();
        $productoneid = request('ProductOne');

        $Product = Product::where('product_id' , '=' , $productoneid)->first();
        $ProductName = $Product->Product_Name;

        $pricesoldone = $Product->product_soldprice;
        $ProductcountOne = request('ProductcountOne');
        $totalPriceOne = $pricesoldone * $ProductcountOne;

       

        $Sell->ProductOne = $Product->$ProductName;
        $Sell->ProductcountOne = $totalPriceOne;

        
        // Product ID TWo
        $producttwoid = request('Producttwo');
        $Producttwo = Product::where('product_id' , '=' , $producttwoid)->first();
        $ProductNametwo = $Producttwo->Product_Name;
        $pricesoldtwo = $Producttwo->product_soldprice;

        $Productcounttwoo = request('Productcounttwo');
        $totalPricetwo = $pricesoldtwo * $Productcounttwoo;

        $Sell->Producttwo = $ProductNametwo;
        $Sell->Productcounttwo = $totalPricetwo;

        



          // Product ID Three
          $Productthreeid = request('Productthree');
          $Productthree = Product::where('product_id' , '=' , $Productthreeid)->first();
          $ProductNamethree = $Productthree->Product_Name;
          $pricesoldthree = $Productthree->product_soldprice;
  
          $Productcountthree = request('Productcountthree');
          $totalPricethree = $pricesoldthree * $Productcountthree;

          

          $Sell->Productthree = $ProductNamethree;
          $Sell->Productcountthree = $totalPricethree;





        
          // Product ID Four
          $Productfoureid = request('Productfour');
          $Productfour = Product::where('product_id' , '=' , $Productfoureid)->first();
          $ProductNameFour = $Productfour->Product_Name;
          $proceproductfour = $Productfour->product_soldprice;
  
          $Productcountfour = request('Productcountfour');
          $totalpricefour = $proceproductfour * $Productcountfour;

          

          $Sell->Productfour = $ProductNameFour;
          $Sell->Productcountfour = $totalpricefour;




          // Product ID Three
          $productfiveid = request('Productfive');
          $productfive = Product::where('product_id' , '=' , $productfiveid)->first();
          $productNamefive = $productfive->Product_Name;
          $priceproductfive = $productfive->product_soldprice;
  
          $Productcountfive = request('Productcountfive');
          $totalpricefive = $priceproductfive * $Productcountfive;

          

          $Sell->Productfive = $productNamefive;
          $Sell->Productcountfive = $totalpricefive;

        //   return $Sell->Productcountfive;




        

          // Product ID Three
          $productidsex = request('Productsix');
          $productsix = Product::where('product_id' , '=' , $productidsex)->first();
          $productNamesix = $productsix->Product_Name;
          $priceproductsix = $productsix->product_soldprice;
  
          $Productcountsex = request('Productcountsex');
          $totalpricesix = $priceproductsix * $Productcountsex;

          

          $Sell->Productsix = $productNamesix;
          $Sell->Productcountsex = $totalpricesix;

        //   return $Sell->Productcountsex;



         // Product ID Three
         $productidseven = request('Productseven');
         $Productseven = Product::where('product_id' , '=' , $productidseven)->first();
         $productNameseven = $Productseven->Product_Name;
         $priceProductseven = $Productseven->product_soldprice;
 
         $Productcountseven = request('Productcountseven');
         $totalpriceseven = $priceProductseven * $Productcountseven;

         

         $Sell->Productseven = $productNameseven;
         $Sell->Productcountseven = $totalpriceseven;

        //  return $Sell->Productcountseven;



         // Product ID Three
         $producoidteight = request('Producteight');
         $Producteight = Product::where('product_id' , '=' , $producoidteight)->first();
         $productNameeight = $Producteight->Product_Name;
         $priceProducteight = $Producteight->product_soldprice;
 
         $Productcounteight = request('Productcounteight');
         $totalpriceeight = $priceProducteight * $Productcounteight;

         

         $Sell->Producteight = $productNameeight;
         $Sell->Productcounteight = $totalpriceeight;

        //  return $Sell->Producteight;


         // Product ID Three
         $productidnine = request('Productnine');
         $Productnine = Product::where('product_id' , '=' , $productidnine)->first();
         $productNameNine = $Productnine->Product_Name;
         $priceProductnine = $Productnine->product_soldprice;
 
         $Productcountnine = request('Productcountnine');
         $totalpricenine = $priceProductnine * $Productcountnine;

         

         $Sell->Productnine = $productNameNine;
         $Sell->Productcountnine = $totalpricenine;

        //  return $Sell->Productcountnine;


         // Product ID Three
         $productidten = request('Productten');
         $Productten = Product::where('product_id' , '=' , $productidten)->first();
         $productNameten = $Productten->Product_Name;
         $priceProductten = $Productten->product_soldprice;
 
         $Productcountten = request('Productcountten');
         $totalpriceten = $priceProductten * $Productcountten;

         

         $Sell->Productten = $productNameten;
         $Sell->Productcountten = $totalpriceten;

        //  return $Sell->Productcountten;


        $Totalallprice =  $Sell->Productcountten + $Sell->ProductcountOne
        +$Sell->Productcounttwo
        +$Sell->Productcountthree
        +$Sell->Productcountfour
        +$Sell->Productcountfive
        +$Sell->Productcountsex
        +$Sell->Productcountseven
        +$Sell->Productcounteight
        +$Sell->Productcountnine;
       

        $selltype = request('selltype');
        // return $selltype;
        if($selltype == 'Borrow'){
            // return "No Error";
            $Sell->selltype = $selltype; 
            $customer_id = request('customer_id');
            $Customers = Customers::where('customer_id' , '=' , $customer_id)->first();
            $Customers->mountborrow =  $Customers->mountborrow  + $Totalallprice;
            $Customers->save(); 
            $Sell->customer_id = $customer_id;
        }
        else{
            $Sell->selltype = $selltype; 
            $Sell->customerName = request('customerName');
        }
        $Sell->totalprice = $Totalallprice;

        $Sell->save();
        return redirect()->back()->with('status' , 'فروش بصورت موفقانه انجام شد');


    }

    public function selldelete(){

    }
    public function selledit(){

    }

    public function StoreUpdatesell(){

    }

}
