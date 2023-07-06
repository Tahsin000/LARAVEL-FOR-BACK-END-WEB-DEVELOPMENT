@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/raju.jpg" alt="this is my image">
        <div class="title m-b-md">
            Hi, I am {{$username}}. My userid is {{$userid}} and age is {{$age}}.

        </div>
        @foreach($products as $product)
            @if($product=='table')
                <h1>{{$product}}</h1>
            @elseif($product=='chair')
                <h1>{{$product}}</h1>
            @else
                <h1>This is neither a table nor a chair.</h1>
            @endif
        @endforeach
    </div>
</div>

@endsection
