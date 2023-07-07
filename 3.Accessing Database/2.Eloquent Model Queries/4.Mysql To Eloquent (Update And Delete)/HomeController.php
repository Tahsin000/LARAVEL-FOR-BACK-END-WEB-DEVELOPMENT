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
       // $readOperation= Product::all();
//        $readOperation= Product::select('name', 'quantity', 'price')->where('id','=', 1)->first();
//        Product::where('id','=',1)->update([
//            'name'=>'table',
//            'quantity'=>'500'
//        ]);

        Product::where('id', '=', '1')->delete();

        return 'Successfully Updated!';
        //dd($readOperation);
       // return $readOperation;
    }
}
