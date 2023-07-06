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

Route::view('/', 'welcome');
Route::get('/home','HomeController@index');

//Route::get('/home/{userid}/{age}', function ($userid, $age){
//    $userName= request('username');
//    $items= array('table', 'chair', 'stool');
//    return view('homepage', ['products'=>$items, 'username'=>$userName, 'userid'=>$userid, 'age'=>$age]);
//});

Route::get('/custom-form', function (){
   return view('customform');
});

Route::post('/form-submit', function (){
    //dd(request()->all());
});

