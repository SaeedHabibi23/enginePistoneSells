<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
   
    public function show_employee(){
        $Employee = Employee::all();
        return view('admin/Employee/showEmployee' , compact('Employee'));

    }
    public function addemployee(){
        return view('admin/Employee/addEmployee');
    }
    public function saveemployee(Request $request){

        $request->validate([
            'employeeName' => "required" , 
            'EmployeePhone' => "required" , 
            'EmployeeSalary' => "required" , 
            'remainSalary' => "required" , 
            'EmployeeAddress' => "required" , 
        ]);
        $Employee = new Employee();
        $Employee->employeeName = request('employeeName');
        $Employee->EmployeePhone = request('EmployeePhone');
        $Employee->EmployeeSalary = request('EmployeeSalary');
        $Employee->remainSalary = request('remainSalary');
        $Employee->EmployeeAddress = request('EmployeeAddress');
        $Employee->save();
        return redirect()->back()->with('status' , 'کارمند بصورت موفقانه ذخیره شد');

    }
    public function employeedelete($employee_id){
        $Employee = Employee::find($employee_id);
        $Employee->delete();
        return redirect()->back()->with('status' , 'کارمند بصورت موفقانه حذف شد');

    }
    public function employeeEdit($employee_id){
        $Employee = Employee::find($employee_id);
        return view('admin/Employee/editEmployee' , compact('Employee'));
    }
    public function StoreUpdateemployee(Request $request){
        $request->validate([
            'employeeName' => "required" , 
            'EmployeePhone' => "required" , 
            'EmployeeSalary' => "required" , 
            'remainSalary' => "required" , 
            'EmployeeAddress' => "required" , 
        ]);
        $Employee = Employee::find($request->employee_id);
        $Employee->employeeName = request('employeeName');
        $Employee->EmployeePhone = request('EmployeePhone');
        $Employee->EmployeeSalary = request('EmployeeSalary');
        $Employee->remainSalary = request('remainSalary');
        $Employee->EmployeeAddress = request('EmployeeAddress');
        $Employee->save();
        return redirect(route('show_employee'))->with('status' , 'عملیه ادیت کردن بصورت موفقانه انجام شد');
    }


}
