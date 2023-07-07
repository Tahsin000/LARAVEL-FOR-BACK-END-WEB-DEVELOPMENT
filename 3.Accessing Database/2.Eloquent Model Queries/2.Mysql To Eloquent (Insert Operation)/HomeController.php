<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(Request $request){
        Product::create([
            'id'=>5,
            'name'=>'mug1',
            'quantity'=>1000,
            'price'=>500
        ]);
        return 'Successfullly Executed!';
    }
}
