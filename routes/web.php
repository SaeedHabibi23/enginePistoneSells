<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\ExpensiveController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' ,function(){

    return view('master_frount/masterF');
});

//product
Route::get('/insert_product', [productController::class , 'index']);
Route::get('/stocks',[StockController::class,'index']);
Route::post('product_insert1' ,[productController::class , 'store']);
Route::get('show' ,[productController::class , 'show']);


Route::get('/contact' ,function(){

    return view('master_frount/contact');
});

Route::get('/productdetail' ,function(){

    return view('master_frount/table');
});











Route::get('/p_a', function () {
    return view('admin/product_amount_form');
});


// This routes related to the customers........................................................
Route::get('mainpage' ,[CustomerController::class , 'mainpage']);
Route::get('showcustomers' ,[CustomerController::class , 'showcustomers'])->name('showcustomers');
Route::get('addcustomer' ,[CustomerController::class , 'addcustomer']);
Route::post('savecustomer' ,[CustomerController::class , 'savecustomer']);
Route::get('customerdelete/{customer_id}' ,[CustomerController::class , 'delete']);
Route::get('customeredit/{customer_id}' ,[CustomerController::class , 'edit']);
Route::post('StoreUpdate' ,[CustomerController::class , 'StoreUpdate']);
// End of customers .................................................................

// This routes related to the products........................................................
Route::get('showproducts' ,[ProductController::class , 'showproducts'])->name('showproducts');
Route::get('addproduct' ,[ProductController::class , 'addproduct']);
Route::post('saveproduct' ,[ProductController::class , 'saveproduct']);
Route::get('Producdelete/{product_id}' ,[ProductController::class , 'productdelete']);
Route::get('productedit/{product_id}' ,[ProductController::class , 'productedit']);
Route::post('StoreUpdateproduct' ,[ProductController::class , 'StoreUpdateproduct']);
// End of ROutes...........................................................................

// This routes related to the Sell........................................................
Route::get('showsell' ,[SellController::class , 'showsell'])->name('showsell');
Route::get('addsell' ,[SellController::class , 'addsell']);
Route::post('savesell' ,[SellController::class , 'savesell']);
Route::get('Producdelete/{sell_id}' ,[SellController::class , 'selldelete']);
Route::get('selledit/{sell_id}' ,[SellController::class , 'selledit']);
Route::post('StoreUpdatesell' ,[SellController::class , 'StoreUpdatesell']);
Route::get('seedetails/{sell_id}' ,[SellController::class , 'seedetails']);


// End of Routes...........................................................................

// This routes related to the Sell........................................................
Route::get('show_earning' ,[EarningController::class , 'show_earning'])->name('show_earning');
Route::get('insert_earning' ,[EarningController::class , 'insert_earning']);
Route::post('saveearning' ,[EarningController::class , 'saveearning']);
Route::get('Earningdelete/{earning_id}' ,[EarningController::class , 'earningDelete']);
Route::get('Earningtedit/{earning_id}' ,[EarningController::class , 'EarningEdit']);
Route::post('StoreUpdateEarning' ,[EarningController::class , 'StoreUpdateEarning']);
// End of Routes...........................................................................


// This routes related to the Sell........................................................
Route::get('show_expensive' ,[expensiveController::class , 'show_expensive'])->name('show_expensive');
Route::get('insert_expensive' ,[expensiveController::class , 'insert_expensive']);
Route::post('saveexpensive' ,[expensiveController::class , 'saveexpensive']);
Route::get('expensivdelete/{expensive_id}' ,[expensiveController::class , 'expensivdelete']);
Route::get('expensivtedit/{expensive_id}' ,[expensiveController::class , 'expensiveEdit']);
Route::post('StoreUpdateexpensive' ,[expensiveController::class , 'StoreUpdateexpensive']);
// End of Routes...........................................................................


// This routes related to the Sell........................................................
Route::get('show_employee' ,[EmployeeController::class , 'show_employee'])->name('show_employee');
Route::get('addemployee' ,[EmployeeController::class , 'addemployee']);
Route::post('saveemployee' ,[EmployeeController::class , 'saveemployee']);
Route::get('employeedelete/{employee_id}' ,[EmployeeController::class , 'employeedelete']);
Route::get('employeeEdit/{employee_id}' ,[EmployeeController::class , 'employeeEdit']);
Route::post('StoreUpdateemployee' ,[EmployeeController::class , 'StoreUpdateemployee']);
// End of Routes...........................................................................


// This routes related to the Sell........................................................
Route::get('show_salary' ,[SalariesController::class , 'show_salary'])->name('show_salary');
Route::get('addsalary' ,[SalariesController::class , 'addsalary']);
Route::post('savesalary' ,[SalariesController::class , 'savesalary']);
Route::get('salarydelete/{salary_id}' ,[SalariesController::class , 'salarydelete']);
Route::get('salarytedit/{salary_id}' ,[SalariesController::class , 'salaryEdit']);
Route::post('StoreUpdatesalary' ,[SalariesController::class , 'StoreUpdatesalary']);
// End of Routes...........................................................................





//order
Route::get('order' ,function(){

    return view('/admin/order_form');
});


Route::get('or_ass',function(){
return view('/admin/orderasset_for');
});

Route::get('sale_asset_add' , function(){

return view('admin/sale_asset_form');

});
Route::post('/sale_asset_add', [sale_asset_Controller::class ,'store']);