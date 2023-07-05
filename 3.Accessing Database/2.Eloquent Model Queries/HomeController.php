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
        //$id= 1;
        $products= Product::orderBy('price', 'desc')->get();
        dd($products);
//        $userid= $request->userid;
//        $age= $request->age;
//        $username= request('username');
//        $products= array('table', 'chair', 'stool');
//        return view('homepage',compact('userid','age','username','products'));
    }
}
