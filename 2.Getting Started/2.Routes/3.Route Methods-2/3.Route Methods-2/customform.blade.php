@extends('layout.custom')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="/images/raju.jpg" alt="this is my image">
            <div class="title m-b-md">
                Hi, I am Raju.
                <form method="post" action="form-submit">
                    <div class="form-group">
                        <label>Usename</label>
                        <input type="text" name="username" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
