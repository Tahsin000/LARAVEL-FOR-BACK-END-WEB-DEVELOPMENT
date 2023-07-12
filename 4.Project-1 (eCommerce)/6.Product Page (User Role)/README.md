# 6.Product Page (User Role)
 - 1.All Products Show -- Web Development with Laravel
 - 2.Laravel Pagination -- Web Development with Laravel
 - 3.View Specific Product (Migrations)
 - 4.View Specific Product (Details)-1 - Laravel for Back-End Web Development
 - 5.View Specific Product (Details)-2 -- Web Development with Laravel
 - 6.View Related Products -- Web Development with Laravel
 
## how to add pagination

### this is the pagination function in the controller

```php
public function index()
{
    $products = Product::paginate(3);
    return view('shop.shop', compact('products'));
}
```

### in the pagination UI we will copy this code and also paste the terminal to find the pagination UI

```php
php artisan vendor:publish --tag=laravel-pagination
```

### this is the code of pagination view

```php
{{ $products->links() }}
```

### Find product controller also category

```php
public function find_products($id){
    $product = Product::find($id);
    $images = explode('|',$product -> image);
    $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();

    return view('share.productModal', compact('product','images', 'related_products'));
}
```

### Product and category relationship by Product Model

```php
public function category(){
    return $this->hasOne(Category::class, 'id', 'category_id');
}
```

### Product find by product_id / also find the relative product by category_id

```php
public function find_products($id){
    $product = Product::find($id);
    $images = explode('|',$product -> image);
    $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();

    return view('share.productModal', compact('product','images', 'related_products'));
}
```
