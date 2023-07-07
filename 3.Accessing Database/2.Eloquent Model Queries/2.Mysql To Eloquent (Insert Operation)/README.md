# 2.Mysql To Eloquent (Insert Operation)

## how insert data in Mysql To Eloquent

- this is the code of controller

- ```php
  public function show (Request $request){
    Product::create([
        'id'=> 5,
        'name'=> 'mug1',
        'quantity'=> 1000,
        'price'=> 500,

    ]);
    return 'Successfully Execute!';
  }
  ```

- this is the code of Model

- ```php
  class Product extends Model
  {
      protected $fillable = ['name', 'quantity', 'price', 'create_at', 'updated_at'];
      protected $primaryKey = 'id';
      protected $KetType = 'string';
      public $incrementing = false;
  }
  ```

- ## [HomeController](HomeController.php)
- ## [MySQL To Eloquent](<MySQL To Eloquent.pptm>)
- ## [Product](Product.php)
