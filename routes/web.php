<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MainController;
use App\Models\Order;
use App\Models\Description;
Route::middleware('auth')->get('/',[App\Http\Controllers\MainController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/new_task', function () { return view('new_task');})->name('new_task');
Route::middleware('auth')->post('/create_task', [App\Http\Controllers\OrderController::class, 'create'])->name('create_task');
Route::middleware('auth')->get('/create_task',  function () { return view('new_task');});
Route::middleware('admin')->get('admin', function(){ 
    $orders = Order::all();
    return view('admin',compact('orders'));
})->name('admin');
Route::middleware('admin')->post('/admin/{id}', [App\Http\Controllers\AdminController::class, 'changeStatus'])->name('change');