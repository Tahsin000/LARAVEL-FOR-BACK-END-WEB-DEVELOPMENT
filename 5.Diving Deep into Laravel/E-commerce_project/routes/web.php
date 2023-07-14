<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', '\App\Http\Controllers\ProductController@home');

//Route::get('/shop', function(){
//    return view('shop.shop');
//});

Route::get('/features', function(){
    return view('features.feature');
});

//Route::get('/my_cart', function(){
//    return view('cart.cart');
//});

Route::get('/blog', function(){
    return view('blog.blog');
});

Route::get('/about', function(){
    return view('about.about');
});

Route::get('/contact', function(){
    return view('contact.contact');
});

Route::get('/login', function(){
    return view('component.login');
})->name('login');

Route::get('/register', function(){
    return view('component.register');
});

Route::post('/add-to-cart', '\App\Http\Controllers\ProductController@addToCart');

Route::resource('/shop', \App\Http\Controllers\ProductController::class);
Route::resource('/users', \App\Http\Controllers\UserController::class);


// ----------  cart  ---------------
Route::get('/view_cart', '\App\Http\Controllers\ProductController@viewCart');
Route::get('/remove_item/{rowId}', '\App\Http\Controllers\ProductController@removeItem');

// ----------  admin product ---------------
Route::get('/admin_product', '\App\Http\Controllers\ProductController@addProduct')->middleware('auth');
Route::get('/find_products/{id}', '\App\Http\Controllers\ProductController@find_products');