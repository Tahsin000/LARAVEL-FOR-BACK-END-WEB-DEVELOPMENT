@extends('layout.master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PRODUCT</title>
    <style>
        .h-screen {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-4">
        <div class="h-screen row justify-content-center align-items-center ">
            <div class="col-md-3 col-sm-6 col-12">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <h2>Register Form</h2>
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
</body>

</html>