<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/admin',function (){
    return view('admin.home');
});

// USER MANGER
Route::get('/admin/users',[UserController::class,'index']);
Route::get('/admin/users/create',[UserController::class,'creat']);
Route::get('/admin/users/edit/{user_id}',[UserController::class,'edit']);

Route::post('/admin/user/create',[UserController::class,'store']);
