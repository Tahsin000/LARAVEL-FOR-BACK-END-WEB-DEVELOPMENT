# 4.Mysql To Eloquent (Update And Delete)

### how to update data in sql database using lavavel model

```php
public function show(Request $request)
{
    Product::where('id', '=', 1)->update([
        'name' => 'table',
        'quantity' => '500'
    ]);
    return 'Successfully updated!';
}
```

### how to Delete data in sql database using lavavel model

```php
public function show(Request $request)
{
    Product::where('id', '=', 4)-> delete();
    return 'Successfully Delete!';
}
```
