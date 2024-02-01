<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
->prefix('/user')
->name('user.')
->group(function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
->prefix('/admin')
->name('admin.')
->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');


    Route::resource(
        'product-category',\App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',\App\Http\Controllers\UserController::class
    );



    route::get('/admin',[AdminController::class,'index']);

    route::get('/home',[UserController::class,'index']);

});


Route::get('/p', [ProductCategoryController::class, 'index']);


route::get('auth/facebook',[FacebookController::class,'facebookpage']);

route::get('auth/facebook/callback',[FacebookController::class,'facebookredirect']);

