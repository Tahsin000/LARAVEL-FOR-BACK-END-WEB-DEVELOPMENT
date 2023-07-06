@extends('layout.custom')

@section('content')

<div class="h-screen flex justify-center flex-col gap-3 items-center bg-green-100">
    <p class=" uppercase font-normal text-7xl">
        hotash naki ? 
    </p>
    <p class="text-3xl"> Hi, I am {{$userName}}. My Id is {{$userid}} and age is {{$age}}</p>
    @foreach($products as $product)
        @if($product == 'table') 
            <p class="text-xl text-red-600 font-semibold">{{$product}}</p>
        @elseif($product == 'chair')
            <p class="text-xl text-red-600 font-semibold">{{$product}}</p>
        @else
            <p class="text-xl text-red-600 font-semibold">This is neither a table nor a chair.</p>
        @endif 
    @endforeach
    <div class="divide-x bg-red-600" ></div>
    
</div>
@endsection