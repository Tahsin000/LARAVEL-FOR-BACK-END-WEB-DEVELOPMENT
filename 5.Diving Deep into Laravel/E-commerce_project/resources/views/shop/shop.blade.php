@extends('layout.master')

@section('title', 'SHOP')


@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @include('shop.allProducts', ['products'=>$products])

@endsection
