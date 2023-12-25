<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Earnings;

class EarningController extends Controller
{
    
public function show_earning(){
    $Earnings = Earnings::all();
    return view('admin/Earnings/showEarnings' , compact('Earnings'));
}

public function insert_earning(){
    return view('admin/Earnings/addEarnings');
}
public function saveearning(Request $request){
    $request->validate([
        'price' => "required" , 
        'date' => "required" , 
        'description' => "required" , 
    ]);
    $Earnings = new Earnings();
    $Earnings->price = request('price');
    $Earnings->date = request('date');
    $Earnings->description = request('description');
    $Earnings->save();
    return redirect()->back()->with('status' , 'عواید بصورت موفقانه ذخیره شد');

}
public function earningDelete($earning_id){
    $Earnings = Earnings::find($earning_id);
    $Earnings->delete();
    return redirect()->back()->with('status' , 'عواید بصورت موفقانه حذف شد');

}
public function EarningEdit($earning_id){
    $Earnings = Earnings::find($earning_id);
    return view('admin/Earnings/editEarnings' , compact('Earnings'));
}

// This function is used to save edit
public function StoreUpdateEarning(Request $request){
    $request->validate([
        'price' => "nullable" , 
        'date' => "nullable" , 
        'description' => "nullable" , 
    ]);
    $Earnings = Earnings::find($request->earning_id);
    $Earnings->price = request('price');
    $Earnings->date = request('date');
    $Earnings->description = request('description');
    $Earnings->save();
    return redirect(route('show_earning'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');

}





}
