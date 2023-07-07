<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home/{userid}/{password}', 'App\Http\Controllers\HomeController@show');

// Route::get("/home/{userid}/{age}", function($userid, $age) {
//     $userName = request(key:'username');
//     $items = array('table', 'chair', 'stool');
//     return view('homePage', ['products' => $items, 'userName' => $userName, 'userid' => $userid, 'age' => $age]);
// });

Route::get('/custom-form', function(){
    return view ('customForm');
});
Route::post("/form-submit", function(){
    dd(request()->all());
});

Route::get('/insert', 'App\Http\Controllers\HomeController@insertOpration');
Route::get('/read', 'App\Http\Controllers\HomeController@readOpration');
Route::get('/update', 'App\Http\Controllers\HomeController@updateOpration');
Route::get('/delete', 'App\Http\Controllers\HomeController@deleteOpration');


// HomeController 
 Route::get('/home','App\Http\Controllers\HomeController@index');