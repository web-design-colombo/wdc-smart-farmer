<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\models\user;
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
    return view('welcome');
});


Route::get('/redirects',[HomeController::class,'index']);;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/redirects');
    })->name('dashboard');
});



//admin route
Route::group(['middleware' => ['auth:sanctum', 'verified', 'user-role:2']], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });


    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::get('category', function () {
        return view('admin.productcategory.create');
    });



//category route
    Route::get('/admin/category', 'App\Http\Controllers\CategoriController@index');
    Route::POST('/category-add', 'App\Http\Controllers\CategoriController@add');
    Route::GET('/category-add', 'App\Http\Controllers\CategoriController@add');
    Route::get('/admin/category/delete', 'App\Http\Controllers\CategoriController@delete');
    Route::get('/admin/category/edit', 'App\Http\Controllers\CategoriController@edit');
    Route::get('/admin/category/update', 'App\Http\Controllers\CategoriController@update');


//product route
    Route::get('product', 'App\Http\Controllers\ProductController@index');
    Route::get('showproduct', 'App\Http\Controllers\ProductController@show');
    Route::POST('/product-add', 'App\Http\Controllers\ProductController@add');
    Route::GET('/product-add', 'App\Http\Controllers\ProductController@add');
    Route::get('/admin/category/delete', 'App\Http\Controllers\ProductController@delete');
    Route::get('/admin/category/edit', 'App\Http\Controllers\ProductController@edit');
    Route::get('/admin/category/update', 'App\Http\Controllers\ProductController@update');

});


//front end ui (shop)
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('view-category/{id}', 'App\Http\Controllers\ShopController@viewCategoryById');
Route::get('more/{slug}', 'App\Http\Controllers\ShopController@more');
Route::post('addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');

//front end card
Route::post('addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');
Route::get('cart', 'App\Http\Controllers\CartController@show');
Route::put('cartupdate/{id}', 'App\Http\Controllers\CartController@updateQuantity');
Route::get('cartdelete/{id}', 'App\Http\Controllers\CartController@delete')->name('cart.delete');


//checkout controller
    Route::get('checkout', 'App\Http\Controllers\CheckoutController@index');
    Route::post('/place-oder', 'App\Http\Controllers\CheckoutController@placeOrder');

//order confirmation
Route::get('/confirmation', 'App\Http\Controllers\Confirmation@index');

//order history
Route::get('my-orders', 'App\Http\Controllers\UserController@index');
Route::get('view-order/{id}', 'App\Http\Controllers\UserController@viewOrder');
