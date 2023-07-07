# 2. One to Many

## Route controller

```php
public function index(){
    return Product::find(1)->user_one_to_many;
}
```

## Relation controller

```php
public function user_one_to_many(){
    return $this->hasMany(User::class, 'products_id','id');
}
```
