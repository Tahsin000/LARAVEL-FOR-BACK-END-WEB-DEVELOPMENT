# 1. One to One

## Route controller

```php
public function index(){
    return Product::find(1)->user;
}
```

## Relation controller

```php
public function user(){
    return $this->hasOne(User::class, 'products_id','id');
}
```
