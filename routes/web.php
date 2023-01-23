<?php

use App\Http\Controllers\UserController;
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

Route::get('/maquette/auth',function (){
    return view('login_register');
});

// REDIRECT USER AFTER THE LOG
Route::middleware(\App\Http\Middleware\RoleRooting::class,)->group(function (){
    Route::get('/home', function () {
        return view('welcome');
    });
});

// REQUIRE ROLE : EDITOR || ADMIN || SUPERADMIN
Route::middleware(\App\Http\Middleware\HasRole::class)->group(function () {
    Route::get('/admin', function () {
        return view('admin.home');
    });



});

// REQUIRE ROLE : ADMIN || SUPERADMIN
Route::middleware(\App\Http\Middleware\IsAdmin::class)->group(function () {

    // USER MANGER
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/users/create', [UserController::class, 'creat']);
    Route::get('/admin/users/edit/{user_id}', [UserController::class, 'edit']);

    Route::post('/admin/user/create', [UserController::class, 'store']);
    Route::post('/admin/user/edit/{user_id}', [UserController::class, 'update']);
    Route::post('/admin/users/delete/', [UserController::class, 'remove']);
});
