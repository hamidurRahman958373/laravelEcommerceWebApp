<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/adminlogout', function () {
    Session::forget('admin');
    return redirect('/');
});
Route::view('/adminpanel', 'adminpanel');
Route::view('/adminregister', 'adminregister');
Route::view('/adminlogin', 'adminlogin');
Route::view('/register', 'register');
Route::post("/register",[UserController::class,'register']);

Route::post("/adminregister",[UserController::class,'registerAdmin']);

//addproduct
Route::view('/addproduct', 'addproduct');
Route::post("/addproduct",[ProductController::class,'addproduct']);


Route::post("/login",[UserController::class,'login']);
Route::post("/adminlogin",[UserController::class,'adminlogin']);

Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::Post("add_to_Cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removecart']);
Route::get("ordernow",[ProductController::class,'ordernow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);

//user list
Route::view('/listuser', 'listuser');
Route::get('/listuser',[UserController::class,'listuser']);
Route::get('/delete/{id}',[UserController::class,'delete']);
//admin list
Route::view('/listadmin', 'listadmin');
Route::get('/listadmin',[UserController::class,'listadmin']);

//productlist
Route::view('/productlist', 'productlist');
Route::get('/productlist',[ProductController::class,'productlist']);

//orderlist
Route::view('/orderlistlist', 'orderlistlist');
Route::get('/orderlistlist',[ProductController::class,'orderlistlist']);


Route::view('/edituser', 'edituser');
Route::get('/edituser/{id}',[UserController::class,'showData']);
Route::post('/edituser',[UserController::class,'update']);

Route::get('/listuser',[UserController::class,'pagination']);
Route::get('/listadmin',[UserController::class,'pagination2']);
Route::get('/productlist',[ProductController::class,'pagination3']);
Route::get('/orderlistlist',[ProductController::class,'pagination4']);