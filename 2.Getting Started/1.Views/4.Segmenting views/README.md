# 4.Segmenting views

## how to use outlet in laravel 
``` php
 @yield('content') // Where it is used it will be in common form
```

### The files I want to exchange, Then it needs to be written

``` php
@extends('layout.custom')
@section('content')  // content Must match ==== @yield('content') ====
```