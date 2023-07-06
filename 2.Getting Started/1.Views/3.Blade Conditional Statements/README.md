# 3.Blade Conditional Statements

[homepage](<3.Blade Conditional Statements/homepage.blade.php>)
[web](<3.Blade Conditional Statements/web.php>)

### conditional statement

``` php

@foreach($products as $product) // this call foreach loop
    @if($product == 'table')  // this call conditional statement
        <p class="text-xl text-red-600 font-semibold">{{$product}}</p>
    @elseif($product == 'chair')
        <p class="text-xl text-red-600 font-semibold">{{$product}}</p>
    @else
        <p class="text-xl text-red-600 font-semibold">This is neither a table nor a chair.</p>
    @endif 
@endforeach
```