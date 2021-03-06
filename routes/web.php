<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name("Home");


    Route::post('/login', [LoginController::class, 'validerlogin'])->middleware('guest');
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/logout', [LoginController::class, 'logout']);

Route::get("/dashboard/{roleName}",function($roleName){
    Auth::user()->roleName = $roleName;
    return view("dashboard");

})->middleware("auth");