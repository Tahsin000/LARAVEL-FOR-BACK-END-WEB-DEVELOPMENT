<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(Request $request){
        Product::where('id', '=', '1')->delete();

        return 'Successfully Updated!';
    }

    public function insertOperation(){
//        DB::table('products')->insert([
//           'id'=>5,
//           'name'=>'table',
//           'quantity'=>100,
//            'price'=>500
//        ]);

        DB::insert('Insert into products (id, name, quantity, price) values(?, ?, ?, ?)',[6, 'table1', 250, 400]);

        return 'Insertion Complete!';
    }

    public function readOperation(){
        //$product= DB::table('products')->select('name', 'price', 'quantity')->where('id','=',6)->get();
        $product= DB::select('select name, price, quantity from products where id=6');
        return $product;
    }

    public function updateOperation(){
        DB::update('UPDATE products SET name="table2", price=500 where id=6');

        return 'Update Complete!';
    }


    public function deleteOperation(){
        DB::delete('DELETE FROM products where id=6');
        return 'Delete Complete';
    }

}
