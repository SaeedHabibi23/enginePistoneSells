<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalariesController extends Controller
{
   
    public function show_salary(){
        $Salary = Salary::all();
        return view('admin/salary/showsalary' , compact('Salary'));

    }
    public function addsalary(){

    }
    public function savesalary(Request $request){

    }
    public function salarydelete($salary_id){

    }
    public function salaryEdit($salary_id){

    }
    public function StoreUpdatesalary(Request $request){

    }




}
