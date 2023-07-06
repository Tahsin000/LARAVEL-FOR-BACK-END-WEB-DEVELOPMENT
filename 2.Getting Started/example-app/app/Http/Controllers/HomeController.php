<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    public function index(){
        return view('welcome');
    }
    public function show (Request $request){
        $userid = $request -> userid;
        $password = $request -> password;
        // return("My username $username and password is $password");
        return view ("userName", ['userid' => $userid, 'password' => $password]);
    }
}
