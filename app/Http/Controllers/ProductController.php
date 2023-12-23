<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function showproducts(){
        $Product = Product::all();
        return view('admin/Product/showProduct' , compact('Product'));
    } 
    public function addproduct(){
        return view('admin/Product/addproduct');

    }

    public function saveproduct(Request $request){
        $request->validate([
            'Product_Name' => 'required' , 
            'product_count' => 'required' , 
            'product_buyPrice' => 'required|numeric' , 
            'product_soldprice' => 'required' , 
        ]);
        $Product = new Product();
        $Product->Product_Name = request('Product_Name');
        $Product->product_count = request('product_count');
        $Product->product_buyPrice = request('product_buyPrice');
        $Product->product_soldprice = request('product_soldprice');
        $Product->save();
        return redirect()->back()->with('status' , 'محصول موفقانه ذخیره شد');
    }

    public function productdelete($product_id){
        $Product = Product::find($product_id);
        $Product->delete();
        return redirect()->back()->with('status' , 'محصول موفقانه حذف شد');

    }
    public function productedit($product_id){
        $Product = Product::find($product_id);
        return view('admin/Product/editProduct' , compact('Product'));
    }

    public function StoreUpdateproduct(Request $request){
        $request->validate([
            'Product_Name' => 'required' , 
            'product_count' => 'required' , 
            'product_buyPrice' => 'required|numeric' , 
            'product_soldprice' => 'required' , 
        ]);
        $Product = Product::find($request->product_id);
        $Product->Product_Name = request('Product_Name');
        $Product->product_count = request('product_count');
        $Product->product_buyPrice = request('product_buyPrice');
        $Product->product_soldprice = request('product_soldprice');
        $Product->save();
        return redirect(route('showproducts'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');
    } 

    
}
