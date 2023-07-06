# 2.Blade Loops

[homepage](2.materials/homepage.blade.php)
[web](2.materials/web.php)

### foreach

```php
 @foreach($products as $product)
    <p class="text-lg text-yellow-900">{{$product}}</p>
@endforeach
```

### for Loop

```php
 @for ($i = 0; $i<count($products); $i++)
    <h1 class="text-xl"> {{ $products[$i] }} </h1>
@endfor
```

### Home Routing

```php
Route::get("/home", function() {
    $items = array('table', 'chair', 'stool');
    return view('homePage', ['products' => $items]);
});
```
