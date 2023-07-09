@extends('layout.master')

@section('title', 'HOME')


@section('content')
    @include('homePage.slider')
    @include('homePage.banner')
    @include('homePage.products')

@endsection
