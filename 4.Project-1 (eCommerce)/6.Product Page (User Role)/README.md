# 6.Product Page (User Role)

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

