# 3.Route Methods-2

[custom](<3.Route Methods-2/custom.blade.php>)
[customform](<3.Route Methods-2/customform.blade.php>)
[web](<3.Route Methods-2/web.php>)

### from submission

```php
    <form action="form-submit" method="post" class="bg-gray-900 px-4 py-6 rounded-lg">
        @csrf
        <div class="mb-6">
            <label for="username" class="block mb-1">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" class="w-full px-3 py-2 rounded-md " required>
        </div>
        <div class="mb-6">
            <label for="password" class="text-black block mb-1">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full px-3 py-2 rounded-md " required>
        </div>
        <div class="mb-6 black">
            <input type="submit" class="px-4 py-2 rounded-md">

        </div>
    </form>

```

### from routes

```php
Route::get('/custom-form', function(){
    return view ('customForm');
});
Route::post("/form-submit", function(){
    dd(request()->all());
});

```
