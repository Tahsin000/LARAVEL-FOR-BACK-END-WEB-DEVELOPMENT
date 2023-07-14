# 2.Ajax API Call

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
  // alert(`${amount}, ${pid}`);
}
```
