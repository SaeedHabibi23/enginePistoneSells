<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;
class SalariesController extends Controller
{
   
    public function show_salary(){
        $Salary = Salary::join('employees' , 'employees.employee_id' , 'salaries.employee_id')->get();
        return view('admin/salary/showsalary' , compact('Salary'));

    }
    public function addsalary(){
        $Employee = Employee::all();
        return view('admin/salary/addsalary' , compact('Employee'));
    }
    public function savesalary(Request $request){
        $request->validate([
            'employee_id' => "required" , 
            'startdate' => "required" , 
            'enddate' => "required" , 
            'mount' => "required" , 
            'description' => "required" , 
        ]);
        $Salary = new Salary();
        $Salary->employee_id = request('employee_id');
        $Salary->startdate = request('startdate');
        $Salary->enddate = request('enddate');
        $Salary->mount = request('mount');
        $Salary->description = request('description');
       
        $money = request('mount');
        $emoloyeeid = request('employee_id');
        $Employee = Employee::find($emoloyeeid);
        $Employee->remainSalary = $Employee->remainSalary - $money;
        $Employee->save();
        $Salary->save();
        return redirect()->back()->with('status' , 'معاش بصورت موفقانه ذخیره شد');

    }
    public function salarydelete($salary_id){
        $Salary = Salary::find($salary_id);
        $Salary->delete();
        return redirect()->back()->with('status' , 'معاش بصورت موفقانه حذف شد');

    }
    public function salaryEdit($salary_id){
        $Salary = Salary::find($salary_id);
        $Employee = Employee::all();
        $data = [
            'Salary' => $Salary , 
            'Employee' => $Employee
        ];

        return view('admin/salary/editsalary' , compact('data'));

    }
    public function StoreUpdatesalary(Request $request){
        $request->validate([
            'employee_id' => "required" , 
            'startdate' => "required" , 
            'enddate' => "required" , 
            'mount' => "required" , 
            'description' => "required" , 
        ]);
        $Salary = Salary::find($request->salary_id);

        $mount = $Salary->mount;


        $Salary->employee_id = request('employee_id');
        $Salary->startdate = request('startdate');
        $Salary->enddate = request('enddate');
        $Salary->mount = request('mount');
        $Salary->description = request('description');
       
        $money = request('mount');
        $emoloyeeid = request('employee_id');
        $Employee = Employee::find($emoloyeeid);
        $Employee->remainSalary = $Employee->remainSalary + $mount;
        $Employee->remainSalary = $Employee->remainSalary - $money;
        $Employee->save();
        $Salary->save();
        return redirect(route('show_salary'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');
    }




}
