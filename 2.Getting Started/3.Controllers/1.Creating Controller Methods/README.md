# 1.Creating Controller Methods

## 1.Creating Controller Methods

[HomeController](<1.Creating Controller Methods/HomeController.php>)
[web](<1.Creating Controller Methods/web.php>)

### how to create a controller

```php
php artisan make:controller HomeController
```

### Home Controller

```php
// HomeController
 Route::get('/home','App\Http\Controllers\HomeController@index');
```
