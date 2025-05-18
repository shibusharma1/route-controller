<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


// route using function or default route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

// Route using Controller
Route::get('/test',[TestController::class,'viewTest']);

//Route by giving the name to the route

//route group and route ma prefix
Route::get('/learn-more',[TestController::class,'learnMore'])->name('learn-more');
Route::fallback(function(){
    return view('errors.404');
});
// Route::get('/register/{name?}',function($name="Guest"){

//     return view('test',compact('name'));

// });


Route::get('create',[AuthController::class,'create'])->name('create');
Route::post('register/store',[AuthController::class,'store'])->name('register.store');
