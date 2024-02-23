<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacebookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\HomeController;

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

Route::get('redirects',[HomeController::class,'index']);;

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

    Route::get('dashboard', function () {
        return view('admin.user.index');
    })->name('dashboard');


    Route::resource(
        'product-category',\App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',\App\Http\Controllers\UserController::class
    );

});

 Route::resource(
        'product-category',\App\Http\Controllers\ProductCategoryController::class
    );



route::get('auth/facebook',[FacebookController::class,'facebookpage']);

route::get('auth/facebook/callback',[FacebookController::class,'facebookredirect']);
Route::get('/users', [UserController::class, 'index'])->name('user.index');


Route::get('about', function () {
    return view('admin.product_category.index');
})->name('about');

Route::get('/community', function () {
    return view('community');
});

Route::get('/fi', function () {
    return view('find');
});

use App\Http\Controllers\VegetableController;

Route::get('/vegetable-calculator', [VegetableController::class, 'index']);
Route::post('/vegetable-calculator/calculate', [VegetableController::class, 'calculate']);
