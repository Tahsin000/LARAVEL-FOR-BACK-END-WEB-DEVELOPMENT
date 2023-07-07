# 1.Laravel Raw Queries-1

## setup my route

```php
Route::get('/insert', 'App\Http\Controllers\HomeController@insertOpration');
Route::get('/read', 'App\Http\Controllers\HomeController@readOpration');
Route::get('/update', 'App\Http\Controllers\HomeController@updateOpration');
Route::get('/delete', 'App\Http\Controllers\HomeController@deleteOpration');
```

## setup my controller (Laravel RAW query)

```php
    public function insertOpration(Request $request)
    {
        DB::table('products')->insert([
            'id'=>5,
            'name'=>'table',
            'quantity'=>100,
            'price'=>500,
        ]);
    }
```

## setup my controller (plane RAW query)

```php
public function insertOpration(Request $request)
{
    DB::insert('insert into products (id, name, quantity, price) value (?, ?, ?, ?)', [6, 'table1', 150, 400]);
    return "insertion complete !";
}
```
