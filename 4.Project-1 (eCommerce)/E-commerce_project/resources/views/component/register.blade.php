<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    @include('layout.styles')

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
                <h2>Register Form</h2>
                <form method="POST" action="/users">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter username">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Enter password">
                    </div>
                    <button type="submit" class="w-100 btn btn-primary mt-5">Submit</button>
                </form>
                <p class="mt-3 text-center">
                    <small>Already Have account? <a href="{{ url('/login') }}">Login</a></small>
                </p>
            </div>
            
        </div>
    </div>

</body>

@include('layout.script')
</html>