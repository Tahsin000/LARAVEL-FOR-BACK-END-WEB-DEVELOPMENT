# 3.Restful Api Development

## assets

# 1.What Is Rest -- Web Development with Laravel

- ## [forget_password](assets/forget_password.blade.php)
- ## [Rest API](<assets/Rest API.pptx>)
- ## [Fetching](<assets/Fetching Data>)
- ## [env](assets/env)

# 2.Sending Email As Rest -- Web Development with Laravel

## step:1 | setup .env file as the configuration email

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=YOUR_EMAIL
MAIL_PASSWORD=YOUR_EMAIL_PASSWORD
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=YOUR_EMAIL
MAIL_FROM_NAME="${APP_NAME}"
```

## step:2 | Make a mail controller file

```php
php artisan make:controller MailController
```

## step:3 | Make an mail folder inside of TestMail file controller

```php
php artisan make:mail TestMail
```

## step:4 | write this code inside of TestMail and also pass the `$details` variable in constructor function, setup the build function

```php
public $details;

public function __construct($details)
{
    $this->details = $details;
}
 public function build()
{
    return $this->subject('Test Mail')->view('mails.forget_password');
}
```

## step:5 | make blade file in the view folder, the file name is

```path
/views/mails/forget_password.blade.php
```

# 3.Fetching Data -- Web Development with Laravel

## step:1 | write this code in the MailController

```php
 public function sendEmail(Request $request){
    if($request->has('email')){
        $email = $request->get('email');
        $pass = Rand(100001, 999999);

        $details = [
            'title'=>'Send user password',
            'body'=>'Your password is <b>'.$pass.'</b>',
        ];

        Mail::to($email)->send(new TestMail($details));
        return json_encode([
            'success'=>true,
            'response_code'=>200
        ]);
    } else {
        return json_encode([
            'success'=>false,
            'response_code'=>404
        ]);
    }
}
```

## step:2 | configuration the api routing

```php
Route::get('send-email', '\App\Http\Controllers\MailController@sendEmail')->name('sendEmail');
```

# 4.Check Api In Postman -- Web Development with Laravel

## step:1 | Setup the forget_password.blade file

```html
<div class="">{{$details['body']}}</div>
```

## step:2 | Testing API

```html

```
