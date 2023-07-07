# 2.Laravel Raw Queries-2

## setup my controller (Laravel RAW query)

```php
public function readOpration(Request $request)
{
    $products = DB::table('products')->select('name', 'price', 'quantity')->get();
    return $products;
}
```

## setup my controller (plane RAW query)

```php
public function readOpration(Request $request)
{
    $products= DB::select('select name, price, quantity from products');
    return $products;
}
```

## Update Operation

```php
 DB::update('UPDATE products SET name="table2", price=500 where id=6');
return "update complete !";
```

## Delete Operation

```php
DB::delete('DELETE from products where id=6');
return "delete complete !";
```
