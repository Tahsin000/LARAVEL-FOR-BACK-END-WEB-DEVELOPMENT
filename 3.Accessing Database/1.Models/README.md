# 1.Models

[Laravel Models](<Laravel Models.pptm>)
[Product](Product.php)

### how to make a model in laravel

```php
php artisan make:model Product
```

### model code

```php
class Product extends Model
{
    protected $fillable = ['name', 'price', 'create_at', 'updated_at'];

    protected $primaryKey = 'id';

    protected $KetType = 'string';

    public $incrementing = false;
}
```
