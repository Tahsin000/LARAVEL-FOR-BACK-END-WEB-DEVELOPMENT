# 2.Ajax API Call

## assets

- ### [1.Showing Data in View](<Showing Data in View>)
- ### [2.Passing Data To Controller](<2.Passing Data To Controller>)
- ### [3.Setting up Ajax method](<Setting up Ajax method>)

## How to setup quantity as limit as database

### Step: 1 | set the quantity as a text input & defined a function onchange validateAmount()

```html
<input
  class="mtext-104 cl3 txt-center num-product"
  type="text"
  name="quantity"
  value="1"
  onchange="validateAmount(this.value, {{ $product->id }})"
/>
```

### Step: 2 | set the csrf token in the meta tag

```html
<meta name="csrf_token" content="{{csrf_token()}}" />
```

### Step: 3 | make a javascript function validateAmount

```js
function validateAmount(amount, pid) {
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name = "csrf_token"]').attr("content"),
    },
  });
  $.ajax({
    url: "/products/validate_amount",
    data: {
      qty: amount,
      pid: pid,
    },
    async: false,
    type: "POST",
  }).done(function (data) {});
}
```

# 3.Showing Data In View -- Web Development with Laravel

## step: 1 | setup the setup ajx in script tag

```js
<script>
    function validateAmount(amount, pid){
        $.ajaxSetup({
            "headers":{
                "X-CSRF-TOKEN": $('meta[name = "csrf_token"]').attr('content')
            }
        });
        $.ajax({
            url:"/products/validate_amount",
            data:{
                'qty' : amount,
                'pid' : pid
            },
            async:false,
            type: 'POST'
        }).done(function(data){
            let newData = JSON.parse(data);
            let htm = '';

            if (newData.success){
                htm += `<div class="alert alert-danger">${newData.message}</div>`;
                document.getElementById('error_message').innerHTML = htm;
                document.getElementById('qty').value = 1;
            } else {
                document.getElementById('error_message').innerHTML = '';
            }
            console.log(newData);



        });
        // alert(`${amount}, ${pid}`);
    }
</script>
```

## step: 2 | setup an a router like this one

```php
Route::post('/products/validate_amount', '\App\Http\Controllers\ProductController@validateAmount');
```

## step: 3 | write a controller function as check the limit of product quantity like this one

```php
public function validateAmount(Request $request){
    $id = $request->has('pid')? $request->get('pid'):'';
    $product_amount = Product::find($id)->amount;

    if ($request->has('qty') && $request->get('qty') > $product_amount){
        return json_encode([
            'success'=>true,
            'message'=> 'product quantity must be less thene '. $product_amount,
        ]);
    } else {
        return json_encode([
            'success'=>false
        ]);
    }
}
```
