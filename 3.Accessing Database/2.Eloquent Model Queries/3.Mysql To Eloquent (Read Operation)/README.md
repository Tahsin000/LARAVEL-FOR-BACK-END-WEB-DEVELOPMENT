# 3.Mysql To Eloquent (Read Operation)

### how to get data in sql by id

```php
public function show(Request $request)
{
    $products = Product::select('name', 'quantity', 'price')->where('id', '=', 1)->get();
    return $products;
}
```
