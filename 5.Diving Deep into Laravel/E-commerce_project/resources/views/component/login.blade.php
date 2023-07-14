<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                <h2>Login Form</h2>
                <form method="GET" action="/users">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="email">Username</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="pass" placeholder="Enter password">
                    </div>
                    <button type="submit" class="w-100 btn btn-primary">Submit</button>
                    <p class="mt-3 text-center">
                        <small>Create an account! Not <a href="{{ url('/register') }}">registered</a> ?</small>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

@include('layout.script')
</html>