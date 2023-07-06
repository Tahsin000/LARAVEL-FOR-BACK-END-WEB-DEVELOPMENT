# 3.Route and Query Parameters

[HomeController](<3.Route and Query Parameters/HomeController.php>)
[homepage](<3.Route and Query Parameters/homepage.blade.php>)
[web](<3.Route and Query Parameters/web.php>)

### Route

```php
Route::get('/home/{userid}/{password}', 'App\Http\Controllers\HomeController@show');
```

### View

```php
<p class="text-7xl text-center flex flex-col justify-center items-center h-screen" >
    This is my userid {{ $userid }} and password is {{ $password }}
</p>
```

### Controller

```php

public function show (Request $request){
    $userid = $request -> userid;
    $password = $request -> password;
    // return("My username $username and password is $password");
    return view ("userName", ['userid' => $userid, 'password' => $password]);
}
```
