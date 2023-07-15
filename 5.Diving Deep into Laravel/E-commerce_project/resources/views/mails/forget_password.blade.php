@extends('layout.master');
@section('title', $details=>['title'])
<div class="">
    {{$details['body']}}
</div>