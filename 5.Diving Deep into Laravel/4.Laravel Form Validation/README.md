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