<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\models\user;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StripeController;

use App\Http\Controllers\ProductController;

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


Route::get('/redirects',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('redirects');
    })->name('dashboard');
});



//admin route
Route::group(['middleware' => ['auth:sanctum', 'verified', 'user-role:1']], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });



    Route::get('/admin', 'App\Http\Controllers\HomeController@index');

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
    // Route::get('edit/{id', function () {
    //     return view('admin.productcategory.edit');
    // });
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
    Route::put('products/{id}', [ProductController::class, 'update']);


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


//ads
Route::get('viewaddss/{id}', 'App\Http\Controllers\AdsController@view');
Route::put('adsupdate/{id}', 'App\Http\Controllers\AdsController@update');

Route::get('oldads', 'App\Http\Controllers\AdsController@orderhistory');

//sellpro farmers
Route::get('viewsellpro/{id}', 'App\Http\Controllers\AdsController@viewmoresellpro');
Route::put('sellproupdate/{id}', 'App\Http\Controllers\AdsController@update');
Route::put('adsupdatepro/{id}', 'App\Http\Controllers\AdsController@updatepro');

Route::get('orderhistoraay', 'App\Http\Controllers\OrderController@sellhistory');

//users
Route::get('users', 'App\Http\Controllers\UserController@users');
Route::get('view-user/{id}', 'App\Http\Controllers\UserController@viewUser');
Route::get('edit-user/{id}', 'App\Http\Controllers\UserController@editUser');
Route::get('edituser/{id}', 'App\Http\Controllers\UserController@updateUser');
//profile
Route::put('profile/{id}', 'App\Http\Controllers\UserController@profileUpdate');

Route::delete('deleteuse/{id}', 'App\Http\Controllers\UserController@deleteUser');
//add new user
Route::get('adduser', 'App\Http\Controllers\UserController@create');
//profileadd
Route::post('profileadd', 'App\Http\Controllers\UserController@store');




//dashboard
Route::get('/admindash', 'App\Http\Controllers\DashboardController@view');

});


//front end ui (shop)
Route::get('/shop', 'App\Http\Controllers\ShopController@index');
Route::get('view-category/{slug}', 'App\Http\Controllers\ShopController@viewCategory');
Route::get('product-list', 'App\Http\Controllers\ShopController@productAjax');

Route::get('searchproduct', 'App\Http\Controllers\ShopController@searchproduct');
Route::get('more/{slug}', 'App\Http\Controllers\ShopController@more');
Route::post('addToCart/{id}', 'App\Http\Controllers\CartController@addToCart')->name('addToCart');

//front end card
Route::get('cart', 'App\Http\Controllers\CartController@show');
Route::put('cartupdate/{id}', 'App\Http\Controllers\CartController@updateQuantity');
Route::get('cartdelete/{id}', 'App\Http\Controllers\CartController@delete')->name('cart.delete');
Route::get('cart-count', 'App\Http\Controllers\CartController@cartcount');


//checkout controller
Route::get('checkout', 'App\Http\Controllers\CheckoutController@index');
Route::post('/place-oder', 'App\Http\Controllers\CheckoutController@placeOrder');
Route::get('/session', 'App\Http\Controllers\CheckoutController@razorpayCheck')->name('checkout.razorpay.check');


//order confirmation
Route::post('confirmation', 'App\Http\Controllers\Confirmation@index')->name('confirmation');

//order history
Route::get('my-orders', 'App\Http\Controllers\UserController@index');
Route::get('view-order/{id}', 'App\Http\Controllers\UserController@viewOrder');



//vegetable
//add
Route::POST('/addvegetable', 'App\Http\Controllers\VegetableController@create');
Route::GET('/addvegetable', 'App\Http\Controllers\VegetableController@create');

Route::get('vegetables', 'App\Http\Controllers\VegetableController@indexfront');

Route::get('vegetablessss', 'App\Http\Controllers\VegetableController@index');
Route::get('vealll', 'App\Http\Controllers\VegetableController@indexall');
Route::delete('delet/{id}', 'App\Http\Controllers\VegetableController@delete');
//editvege
Route::get('editvege/{id}', 'App\Http\Controllers\VegetableController@edit');

Route::get('morevege/{id}', 'App\Http\Controllers\VegetableController@show');

// Route::get('morevege', function () {
//     return view('vegetables.viewdetails');
// });

//massage
// routes/web.php
use App\Http\Controllers\MessageController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);
Route::delete('/messages/{id}', [MessageController::class, 'destroy']);




//buyers route
// Route::post('/vegetable-buyers', 'AdsController@store')->name('vegetable.buyers.store');
Route::post('store', 'App\Http\Controllers\AdsController@store');
Route::get('newads', 'App\Http\Controllers\AdsController@index');
Route::get('ads', 'App\Http\Controllers\AdsController@indexfrontend');
Route::get('viewadds/{id}', 'App\Http\Controllers\AdsController@viewmore');

//add to wishlist
Route::get('wishlist', 'App\Http\Controllers\WishlistController@index');
//wishliststore

//middlweware for auth
Route::get('auth', function () {
    Route::post('wishliststore', 'App\Http\Controllers\WishlistController@add');
});




//booking appointment
Route::get('appointment', 'App\Http\Controllers\BookingController@index');
//book
Route::post('book', 'App\Http\Controllers\BookingController@store');
//seeallappoinment
Route::get('seeallappoinment', 'App\Http\Controllers\BookingController@show');
//editbooks
Route::get('editbooks/{id}', 'App\Http\Controllers\BookingController@edit');
//update
Route::put('update/{id}', 'App\Http\Controllers\BookingController@update');
//deleteapprov
Route::delete('deleteapprov/{id}', 'App\Http\Controllers\BookingController@destroy');



//rating
Route::post('add-rating', 'App\Http\Controllers\RatingController@add');

//sort
Route::get('/sort', [ShopController::class, 'sortProduct'])->name('sort.product');


//buyers
Route::get('/buyers', function () {
    return view('buyersdashboard');
});


//sell vedget

Route::get('vegesell', 'App\Http\Controllers\AdsController@vegesell');

Route::post('product-addfarmer', 'App\Http\Controllers\AdsController@addfarmer');
Route::get('newproduct', 'App\Http\Controllers\AdsController@indexproduct');
Route::get('ads', 'App\Http\Controllers\AdsController@indexfrontend');


//admin search
Route::get('adminsearch', 'App\Http\Controllers\ProductController@search');
Route::get('product-listadmin', 'App\Http\Controllers\ProductController@productAjax');

Route::get('adminsearchcate', 'App\Http\Controllers\ProductController@searchcate');
Route::get('cate', 'App\Http\Controllers\ProductController@productAjaxx');

//admin  sorting
Route::get('sortorders', 'App\Http\Controllers\OrderController@sortorders');

Route::get('/myroute', [HomeController::class, 'indexnew']);

//stripe.payment

Route::get('payment/{id}/{total}', [StripeController::class, 'session'])->name('stripe.payment');
Route::get('success', [StripeController::class, 'success'])->name('success');
Route::get('checkout', [StripeController::class, 'checkout'])->name('checkout');
