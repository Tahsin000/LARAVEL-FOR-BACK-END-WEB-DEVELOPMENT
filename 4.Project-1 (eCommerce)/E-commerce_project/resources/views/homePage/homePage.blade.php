@extends('layout.master')

@section('title', 'HOME')


@section('content')
    @include('homePage.slider')
{{--    @include('homePage.banner')--}}
    @include('homePage.products', [
    'featured_products'=>$featured_products,
    'latest_products'=>$latest_products,
    ])

@endsection
