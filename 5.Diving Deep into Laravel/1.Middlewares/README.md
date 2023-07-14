# 1. 1.Middlewares

## 1.Introduction To Laravel Middlewares -- Web Development with Laravel

## Laravel Middleware Overview

Here's a brief explanation of the middleware used in Laravel and the contexts they work on:

### Authenticate

- Works on: Routes that require authentication.
- Description: This middleware ensures that the user is authenticated before allowing access to protected routes. It checks if the user has a valid session or token.

### EncryptCookies

- Works on: All incoming cookies.
- Description: This middleware encrypts the cookies sent by the client, ensuring their contents remain secure and tamper-proof.

### PreventRequestsDuringMaintenance

- Works on: All incoming requests.
- Description: This middleware checks if the application is in maintenance mode. If enabled, it returns a response indicating that the application is currently undergoing maintenance, preventing further request processing.

### RedirectifAuthenticated

- Works on: Routes that should not be accessible to authenticated users.
- Description: This middleware redirects authenticated users away from certain routes, such as login or registration pages, to prevent them from accessing those pages again.

### TrimStrings

- Works on: All incoming request input.
- Description: This middleware trims whitespace from the beginning and end of input values automatically, ensuring consistent data handling.

### TrustHosts

- Works on: All incoming requests.
- Description: This middleware specifies a list of trusted hosts for the application. It helps protect against host header attacks by allowing the application to verify incoming requests against the trusted hosts list.

### TrustProxies

- Works on: All incoming requests.
- Description: This middleware enables trust for specific proxy servers and headers. It allows Laravel to recognize the correct client IP address and handle secure HTTPS connections when behind a load balancer or proxy.

### VerifyCsrfToken

- Works on: All incoming non-GET requests.
- Description: This middleware verifies that the CSRF (Cross-Site Request Forgery) token matches between the request and the user's session. It helps protect against CSRF attacks by ensuring the authenticity of form submissions.

These middleware provide various security, authentication, and request handling functionalities to enhance the Laravel application's functionality and security.

# 2.Authentication Middleware -- Web Development with Laravel

## Routing File

### Admin Route

```php
Route::get('/admin_product', '\App\Http\Controllers\ProductController@addProduct')->middleware('auth');
```

### Login Route

```php
Route::get('/login', function(){
    return view('component.login');
})->name('login');
```

### In the Authentication middleware change return route as a `name('login');`

- file location `C:\xampp\htdocs\ecommerce_project\app\Http\Middleware\Authenticate.php`

```php
protected function redirectTo($request)
{
    if (! $request->expectsJson()) {
        return route('login');
    }
}
```

# 4.Custom Middleware-2 - Web Development with Laravel

### Step: 1 | How to make middleware

```php
php artisan make:middleware CheckUser
```

### Step: 2 | How to make make middleware constructor in userController

```php
public function __construct(){
    $this->middleware('check_user')->only('store');
}
```

### Step: 3 | How to defined ```check_user``` in the kernel inside of `$routeMiddleware` array

```php
'check_user' => \App\Http\Middleware\CheckUser::class,
```

### Step: 4 | How to setup checkUser middleware file

```php
public function handle(Request $request, Closure $next)
    {
        if($request->has('reg') && $request->has('uname')){
            $user = User::where('name' , $request->get('uname'))->first();
            if (isset($user) && $user != null){
                return redirect()->back()->with('error', 'User already taken!');
            }
        }
        return $next($request);
    }
```
