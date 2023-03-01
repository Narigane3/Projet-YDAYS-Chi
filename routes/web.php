<?php

use App\Http\Controllers\ProductController;
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

// REDIRECT USER AFTER THE LOG
Route::middleware(\App\Http\Middleware\RoleRooting::class,)->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    });
});

// REQUIRE ROLE : EDITOR || ADMIN || SUPERADMIN
Route::middleware(\App\Http\Middleware\HasRole::class)->group(function () {
    Route::get('/admin', function () {
        return view('admin.home');
    });

    // PRODUCT MANAGE
    Route::get("/admin/products", [ProductController::class, "productsView"]);
    Route::get("/admin/products/edit/{productId}", [ProductController::class, "productModifyView"]);
    Route::get("/admin/product/delete/{productId}", [ProductController::class, "productDelete"]);
    Route::get("/admin/product/createView", [ProductController::class, "createProductView"]);

    Route::post("/admin/product/edit/{productId}", [ProductController::class, "modifyProduct"]);
    Route::post("/admin/product/edit", [ProductController::class, "createProduct"]);
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
