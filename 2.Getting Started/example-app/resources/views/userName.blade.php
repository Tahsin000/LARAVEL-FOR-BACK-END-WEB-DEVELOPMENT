@extends('layout.custom')

@section('content')

<div class="">
    <p class="text-7xl text-center flex flex-col justify-center items-center h-screen" >
        This is my userid {{ $userid }} and password is {{ $password }}
    </p>
</div>
@endsection