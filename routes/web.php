<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

route::get('/admin', function() {
    return view('admin.index');
});

route::get('/products', function(){
    return view('index');
});

route::get('/customers',function(){
    return view('index');
});

// use {location} at the top before calling Controller
route::resource('/admin/products',ProductController::class);

route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
});
