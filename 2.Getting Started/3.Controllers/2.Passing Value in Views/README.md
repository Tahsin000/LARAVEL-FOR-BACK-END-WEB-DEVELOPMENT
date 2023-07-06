# 2.Passing Value in Views

### Passing Value Route

```php
Route::get('/home/{userid}/{age}', 'App\Http\Controllers\HomeController@show');
```

### Passing Value public function

```php
public function show (){
    return "show function is called here !";
}
```
