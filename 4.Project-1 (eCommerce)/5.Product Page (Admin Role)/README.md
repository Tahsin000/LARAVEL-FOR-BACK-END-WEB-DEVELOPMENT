# 5.Product Page (Admin Role)

[Add Product Image-1](<assets/Add Product Image-1>)

[Add Product Image-2](<assets/Add Product Image-2>)

[Add Product-1](<assets/Add Product-1>)

[Add Product-2](<assets/Add Product-2>)

[Admin Products View-1](<assets/Admin Products View-1>)

## This is add_product view 

```php
@extends('layout.master')

@section('title', 'Admin_shop')


@section('content')
    <div class="container-fluid px-4">
        <div class="h-screen row justify-content-center align-items-center my-5">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($returnProducts as $product)
                        <div class="col-lg-4 mt-3 p-3" >
                            <div class="border border-2 p-3 rounded " >
                                <img src="{{ asset($product['image']) }}" height="200px" width="150px">
                                <h2> {{$product['name']}} </h2>
                                <div>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <p> {{$product['price']}}tk </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 p-3 mt-3">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <h2>Add Product</h2>
                <form method="POST" action="/products" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="email">product name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter product name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="text">product price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter price">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">product amount:</label>
                        <input type="text" class="form-control" name="amount" placeholder="Enter product amount">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">product image:</label>
                        <input type="file" class="form-control" name="images[]" multiple placeholder="Enter image">
                    </div>
                    <button type="submit" class="w-100 btn btn-primary mt-5">Submit</button>
                </form>

            </div>

        </div>
    </div>

@endsection

```

## This is the Product Controller 

- to get data preview the product

```php
public function addProduct()
{
    $products = Product::all();
    $returnProducts = array();

    foreach ($products as $product){
        $images = explode('|', $product->image);

        //dd($images[0]);
        $returnProducts[] = [
            'name'=> $product->name,
            'price'=> $product->price,
            'amount'=> $product->amount,
            'image'=>$images[0],
        ];
    }
    return view('admin.add_product', compact('returnProducts')); // compact('returnProducts')
}
```

## This is the Product Controller 

- this is the post data to add an products

```php
public function store(Request $request)
{
    // return $request->all();
    $product = new Product();
    $product->name = $request->has('name') ? $request->get('name'):'';
    $product->price = $request->has('price') ? $request->get('price'):'';
    $product->amount = $request->has('amount') ? $request->get('amount'):'';
    $product->is_active=1;

    if($request -> hasFile('images')){
        $files = $request->file('images');

        $imageLocation = array();
        $i=0;
        foreach($files as $file){
            $extension = $file->getClientOriginalExtension();
            $fileName = 'product_'.time().++$i.'.'.$extension;
            $location = '/images/uploads/';
            $file->move(public_path().$location, $fileName);
            $imageLocation[] = $location.$fileName;
            
        }
        $product->image=implode('|', $imageLocation);
        $product->save();
        return back()->with('success', 'Product Successfully Saved!');
    } else {
        return back()->with('error', 'Product was not saved successfully!');
    }

    $product->save();
    return back()->with('success', 'Product Successfully Save');
}
```

## This is the route code 
```php
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/users', \App\Http\Controllers\UserController::class);

// ----------  admin product ---------------
Route::get('/admin_product', '\App\Http\Controllers\ProductController@addProduct');
```