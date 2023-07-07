# 2.Eloquent Model Queries

### what is name of dd in php

- dd meaning of Dump and Die

## How to get all data in sql database


- this is the Model code

-   ```php
    class Product extends Model
    {
        protected $fillable = ['name', 'price', 'create_at', 'updated_at'];

        protected $primaryKey = 'id';

        protected $KetType = 'string';

        public $incrementing = false;
    }
    ```

- this is the controller code

-   ```php
    public function show (Request $request){
        $products = Product::all();
        dd($products);
    }
    ```

## How to get single data in find method to find the data in sql database

- This is the controller code 

-   ```php
    public function show (Request $request){
        $find = 2;
        $products = Product::find( $find);
        dd($products);
    }
    ```

## How to get filter method to find the data in sql database

- This is the controller code 

-   ```php
    public function show (Request $request){
        $products = Product::where('price','>', 300)->get();
        dd($products);
    }
    ```

## How to get ascending sorting by orderBy method

- This is the controller code 

-   ```php
      public function show (Request $request){
        $products = Product::orderBy('price')->get();
        dd($products);
    }
    ```

## How to get descending sorting by orderBy method

- This is the controller code 

-   ```php
    public function show (Request $request){
        $products = Product::orderBy('price', 'desc')->get();
        dd($products);
    }
    ```





## [2.Mysql To Eloquent](<2.Mysql To Eloquent (Insert Operation)>)

## [4.Mysql To Eloquent](<4.Mysql To Eloquent (Update And Delete)>)

## [HomeController](HomeController.php)

## [MySQL To Eloquent](<MySQL To Eloquent.pptm>)
