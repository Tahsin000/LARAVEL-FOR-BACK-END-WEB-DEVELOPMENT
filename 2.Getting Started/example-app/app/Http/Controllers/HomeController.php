<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // 
    public function index()
    {
        // return view('welcome');
        return Product::find(1)->user;
        // return Product::find(1)->many_to_many;
    }
    public function show(Request $request)
    {
        Product::where('id', '=', 4)-> delete();
        return 'Successfully Delete!'; 
    }
    public function insertOpration(Request $request)
    {
        // DB::table('products')->insert([
        //     'id'=>5,
        //     'name'=>'table',
        //     'quantity'=>100,
        //     'price'=>500,
        // ]);
        DB::insert('insert into products (id, name, quantity, price) value (?, ?, ?, ?)', [6, 'table1', 150, 400]);
        return "insertion complete !";
    }
    public function readOpration(Request $request)
    {
        // $products = DB::table('products')->select('name', 'price', 'quantity')->get();
        $products= DB::select('select * from products');
        return $products;
    }
    public function updateOpration(Request $request)
    {
        DB::update('UPDATE products SET name="table2", price=500 where id=6');
        return "update complete !";
    }
    public function deleteOpration(Request $request)
    {
        DB::delete('DELETE from products where id=6');
        return "delete complete !";
    }
    public function user (){
        return $this->hasOne (User::class, 'products_id');
    }
    public function many_to_many(){
        return $this->belongsToMany(User::class, 'product_user', 'product_id', 'user_id');
    }
}
