# 1.Route Parameter

[homepage](<1.Route Parameter/homepage.blade.php>)
[web](<1.Route Parameter/web.php>)

## Query Parameters

```php
Route::get("/home", function() {
    $userName = request(key:'username');
    $items = array('table', 'chair', 'stool');
    return view('homePage', ['products' => $items, 'userName' => $userName]);
});
```

## Route Parameters

```php
Route::get("/home/{userid}/{age}", function($userid, $age) {
    $items = array('table', 'chair', 'stool');
    return view('homePage', ['products' => $items, 'userid' => $userid, 'age' => $age]);
});
```
