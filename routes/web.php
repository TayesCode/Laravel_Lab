<?php

use App\Http\Controllers\EmployeControl;
use App\Http\Controllers\Lab;
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
    return view('welcome');
});
Route::get('control',[Lab::class,'index']);
Route::get('Employee',[EmployeControl::class,'index']);
Route::post('insertData',[EmployeControl::class,'store']);

