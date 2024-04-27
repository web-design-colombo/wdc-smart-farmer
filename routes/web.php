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
    Route::delete('deleteproductcate/{id}', 'App\Http\Controllers\CategoriController@delete');
    Route::get('edit/{id}', 'App\Http\Controllers\CategoriController@edit');
    Route::get('showcategory', 'App\Http\Controllers\CategoriController@show');
    Route::put('update-category/{id}', 'App\Http\Controllers\CategoriController@update');

//product route
    Route::get('product', 'App\Http\Controllers\ProductController@index');
    Route::get('showproduct', 'App\Http\Controllers\ProductController@show');
    Route::POST('/product-add', 'App\Http\Controllers\ProductController@add');
    Route::GET('/product-add', 'App\Http\Controllers\ProductController@add');
    Route::get('/admin/category/delete', 'App\Http\Controllers\ProductController@delete');
    Route::get('/admin/category/edit', 'App\Http\Controllers\ProductController@edit');
    Route::get('/admin/category/update', 'App\Http\Controllers\ProductController@update');
    Route::get('editproduct/{id}', 'App\Http\Controllers\ProductController@edit');
    Route::delete('deleteproduct/{id}', 'App\Http\Controllers\ProductController@delete');
    Route::put('productshgop-add/{id}', 'App\Http\Controllers\ProductController@update');


//admin vegetable
    Route::get('adminvegetable', 'App\Http\Controllers\VegetableController@index');
    Route::get('showvegetable', 'App\Http\Controllers\VegetableController@show');
    Route::POST('/vegetable-add', 'App\Http\Controllers\VegetableController@add');
    Route::GET('/vegetable-add', 'App\Http\Controllers\VegetableController@add');
    Route::get('/admin/vegetable/delete', 'App\Http\Controllers\VegetableController@delete');
    Route::get('/admin/vegetable/edit', 'App\Http\Controllers\VegetableController@edit');
    Route::get('/admin/vegetable/update', 'App\Http\Controllers\VegetableController@update');


//orders
    Route::get('orders', 'App\Http\Controllers\OrderController@index');
    Route::get('view-orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::get('orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::put('order-update/{id}', 'App\Http\Controllers\OrderController@update');
    Route::get('orderhistory', 'App\Http\Controllers\OrderController@orderhistory');



});


//front end ui (shop)
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('/view-category/{slug}', 'App\Http\Controllers\ShopController@viewCategory');
Route::get('product-list', 'App\Http\Controllers\ShopController@productAjax');

Route::get('searchproduct', 'App\Http\Controllers\ShopController@searchproduct');

Route::get('more/{slug}', 'App\Http\Controllers\ShopController@more');
Route::post('addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');

//front end card
Route::post('addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');
Route::get('cart', 'App\Http\Controllers\CartController@show');
Route::put('cartupdate/{id}', 'App\Http\Controllers\CartController@updateQuantity');
Route::get('cartdelete/{id}', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::get('cart-count', 'App\Http\Controllers\CartController@cartcount');


//checkout controller
    Route::get('checkout', 'App\Http\Controllers\CheckoutController@index');
    Route::post('/place-oder', 'App\Http\Controllers\CheckoutController@placeOrder');

    // Route::post('/session', 'PaymentController@session')->name('session');
    Route::get('session', 'App\Http\Controllers\CheckoutController@session');


//order confirmation
Route::post('confirmation', 'App\Http\Controllers\Confirmation@index')->name('confirmation');

//order history
Route::get('my-orders', 'App\Http\Controllers\UserController@index');
Route::get('view-order/{id}', 'App\Http\Controllers\UserController@viewOrder');



//vegetable
Route::get('vegetables', 'App\Http\Controllers\VegetableController@indexfront');
Route::get('/more', function () {
    return view('vegetables.viewdetails');
});


