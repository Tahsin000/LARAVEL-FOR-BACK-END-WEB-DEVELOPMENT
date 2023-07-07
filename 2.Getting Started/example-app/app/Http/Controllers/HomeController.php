<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    public function index()
    {
        return view('welcome');
    }
    public function show(Request $request)
    {
        Product::where('id', '=', 4)-> delete();
        return 'Successfully Delete!'; 
    }
}
