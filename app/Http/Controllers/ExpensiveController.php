<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expensive;

class ExpensiveController extends Controller
{
   
    public function insert_expensive(Request $request){
        return view('admin/expensive/addexpensive');

    }
    public function show_expensive(){
        $expensive = expensive::all();
        return view('admin/expensive/showexpensive' , compact('expensive'));
    }
    public function saveexpensive(Request $request){
        $request->validate([
            'price' => "required" , 
            'date' => "required" , 
            'description' => "required" , 
        ]);
        $expensive = new expensive();
        $expensive->price = request('price');
        $expensive->date = request('date');
        $expensive->description = request('description');
        $expensive->save();
        return redirect()->back()->with('status' , 'مصارف بصورت موفقانه ذخیره شد');
    }
    public function expensivdelete($expensive_id){
        $expensive = expensive::find($expensive_id);
        $expensive->delete();
        return redirect()->back()->with('status' , 'مصارف بصورت موفقانه حذف شد');

    }
    public function expensiveEdit($expensive_id){
        $expensive = expensive::find($expensive_id);
        return view('admin/expensive/editexpensive' , compact('expensive'));
    }
    public function StoreUpdateexpensive(Request $request){
        $request->validate([
            'price' => "required" , 
            'date' => "required" , 
            'description' => "required" , 
        ]);
        $expensive = expensive::find($request->expensive_id);
        $expensive->price = request('price');
        $expensive->date = request('date');
        $expensive->description = request('description');
        $expensive->save();
        return redirect(route('show_expensive'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');
    }


}
