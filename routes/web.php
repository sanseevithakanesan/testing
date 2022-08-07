<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\loginController;



Route::get('/', function () {
    return view('welcome');
});
Route::view('register','auth.register') -> middleware('guest');
Route::post('storeData',[RegisterController::class,'register']);
Route::view('home','home')->middleware('auth');
Route::view('login','auth.login')-> middleware('guest')-> name('login');
Route::post('authenticate',[loginController::class,'authenticate']);
Route::get('logout',[loginController::class,'logout']);

