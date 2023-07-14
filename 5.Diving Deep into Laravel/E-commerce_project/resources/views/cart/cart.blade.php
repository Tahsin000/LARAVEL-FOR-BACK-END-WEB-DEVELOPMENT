@extends('layout.master')

@section('title', 'CART')


@section('content')
@include('cart.cartForm', ['carts'=>$carts, 'subTotal'=>$subTotal])

@endsection