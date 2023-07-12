@extends('layout.master')

@section('title', 'SHOP')


@section('content')
    @include('shop.allProducts', ['products'=>$products])

@endsection
