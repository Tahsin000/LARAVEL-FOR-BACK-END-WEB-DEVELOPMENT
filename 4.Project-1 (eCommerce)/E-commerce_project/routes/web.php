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

Route::get('/', function(){
    return view('homePage.homePage');
});

Route::get('/shop', function(){
    return view('shop.shop');
});

Route::get('/features', function(){
    return view('features.feature');
});

Route::get('/my_cart', function(){
    return view('cart.cart');
});

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
});

Route::get('/register', function(){
    return view('component.register');
});

Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/users', \App\Http\Controllers\UserController::class);