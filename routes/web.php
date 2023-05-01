<?php

use App\Http\Controllers\NewsletterController;
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
    return view('home');
});

Route::get("/inscription", function () {
    return view("auth.inscription");
});

Route::get('/politique-de-confidentialite', function () {
    return view('privacy_policy');
});

Route::get('/conditions-generales-d-utilisation', function () {
    return view('terms_of_use');
});

// BLOG REDIRECT
Route::get('/blog', function () {
    return view('blog.home');
});
Route::get("/blog/category/{category_id}", function ($category_id) {

    return match ($category_id) {
        "1" => view("blog.category_symptomes_menstruels"),
        "2" => view("blog.category_protections"),
        "3" => view("blog.category_live_with_periods"),
        default => view("blog.home"),
    };
});
Route::get("/blog/article/{article_id}", function ($article_id) {
    return match ($article_id) {
        "1" => view("blog.first_article"),
        "2" => view("blog.second_article"),
        "3" => view("blog.third_article"),
        "4" => view("blog.fourth_article"),
        "5" => view("blog.fifth_article"),
        "6" => view("blog.sixth_article"),
        "7" => view("blog.seventh_article"),
        "8" => view("blog.eighth_article"),
        "9" => view("blog.ninth_article"),
        default => view("blog.home"),
    };
});

// Newsletter create
Route::post('/add/new/contact/', [NewsletterController::class, 'store']);

// REDIRECT USER AFTER THE LOG
Route::middleware(\App\Http\Middleware\RoleRooting::class,)->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});

// REQUIRE ROLE : EDITOR || ADMIN || SUPERADMIN
Route::middleware(\App\Http\Middleware\HasRole::class)->group(function () {
    Route::get('/admin', function () {
        return view('admin.home');
    });
    //*************
    // NEWSLETTER
    Route::get('/admin/newsletter', [NewsletterController::class, 'index']);
    // Newsletter search
    Route::get('/admin/newsletter/search', [NewsletterController::class, 'search']);
    Route::post('/admin/newsletter/search', [NewsletterController::class, 'search']);
    // Newsletter export
    Route::get('/admin/newsletter/export', [NewsletterController::class, 'export']);
    // Newsletter delete
    Route::post('/admin/newsletter/delete/', [NewsletterController::class, 'destroy']);

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
