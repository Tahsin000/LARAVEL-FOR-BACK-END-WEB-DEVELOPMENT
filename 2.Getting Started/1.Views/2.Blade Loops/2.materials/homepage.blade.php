@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/raju.jpg" alt="this is my image">
        <div class="title m-b-md">
            This is my Homepage

        </div>
        @foreach($products as $product)
           <h1>{{$product}}</h1>
        @endforeach
        <h1>For Loop Initiated</h1>
        @for($i=0; $i<3; $i++)
            <h1>{{$products[$i]}}</h1>
        @endfor
    </div>
</div>

@endsection
