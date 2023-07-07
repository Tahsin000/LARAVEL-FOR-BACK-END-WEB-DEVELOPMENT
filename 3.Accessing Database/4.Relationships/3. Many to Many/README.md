# Many to Many

## Route controller

```php
public function index(){
    return Product::with('many_to_many')->find(1);
}
```

## many_to_many Relationship

```php
public function many_to_many(){
    return $this->belongsToMany(User::class,'product_user', 'product_id','user_id');
}
```
