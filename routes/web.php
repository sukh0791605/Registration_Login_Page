<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
Route::get('/Login',[CustomAuthController::class,'Login'])->name('Login');
Route::get('/',[CustomAuthController::class,'index'] );
Route::post('/',[CustomAuthController::class,'register'] );

Route::post('/Loginpage',[CustomAuthController::class,'Loginpage'])->name('Loginpage');
Route::get('/Home',[CustomAuthController::class,'Home']);
Route::get('/logout',[CustomAuthController::class,'logout']);