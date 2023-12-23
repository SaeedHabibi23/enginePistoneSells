<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function mainpage(){
        return view('admin/mainpage');
    }
    public function showcustomers(){
        $Customers = Customers::all();
        return view('admin/customer/showcustomer' , compact('Customers'));
    }
    public function addcustomer(){
        return view('admin/customer/addcustomer');
    }
    public function savecustomer(Request $request){
        $request->validate([
            'customerName' => 'required' , 
            'customerAddress' => 'required' , 
            'CustomerPhone' => 'required|numeric' , 
            'CustomerNameShop' => 'required' , 
            'mountborrow' => 'required' , 
        ]);
        $Customers = new Customers();
        $Customers->customerName = request('customerName');
        $Customers->customerAddress = request('customerAddress');
        $Customers->CustomerPhone = request('CustomerPhone');
        $Customers->CustomerNameShop = request('CustomerNameShop');
        $Customers->mountborrow = request('mountborrow');
        $Customers->save();
        return redirect()->back()->with('status' , 'مشتری موفقانه ذخیره شد');
    }

    public function delete($customer_id){
        $Customers = Customers::find($customer_id);
        $Customers->delete();
        return redirect()->back()->with('status' , 'مشتری موفقانه حذف شد');

    }      
    public function edit($customer_id){
        $Customers = Customers::find($customer_id);
        // return $Customers->customer_id;
        return view('admin/customer/editcustomer' , compact('Customers'));
    }  

    public function StoreUpdate(Request $request){
        $request->validate([
            'customerName' => 'required' , 
            'customerAddress' => 'required' , 
            'CustomerPhone' => 'required|numeric' , 
            'CustomerNameShop' => 'required' , 
            'mountborrow' => 'required' , 
        ]);
        $Customers = Customers::find($request->customer_id);
        $Customers->customerName = request('customerName');
        $Customers->customerAddress = request('customerAddress');
        $Customers->CustomerPhone = request('CustomerPhone');
        $Customers->CustomerNameShop = request('CustomerNameShop');
        $Customers->mountborrow = request('mountborrow');
        $Customers->save();
        return redirect(route('showcustomers'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');
    }



}

