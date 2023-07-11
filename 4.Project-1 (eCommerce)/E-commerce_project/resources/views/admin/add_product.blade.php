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

