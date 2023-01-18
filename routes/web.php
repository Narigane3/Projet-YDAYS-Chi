<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MediaController;

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

Route::get("/galery", [MediaController::class, "galery"]);
Route::get("/galery/{mediaId}", [MediaController::class, "findOneMedia"]);
Route::post("/modifyMedia", [MediaController::class, "modifyOneMedia"]);
Route::post("/createMedia", [MediaController::class, "createMedia"]);
Route::get("/deleteMedia/{mediaId}", [MediaController::class, "deleteMedia"]);
