# 4.Laravel Form Validation

## assets

- ## [UserController](UserController.php)
- ## [account](account.blade.php)

# 1. Form Validation-1-1

### write this code in userController top of the store function

```php
$request->validate([
    'uname'=>'required|max:50',
    'email'=>'required|max:10:unique:users',
    'mobile'=>'numeric|min:8',
]);
```

# Form Validation-2

### write this code register view to show the error message

```php
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-warning alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
```
