# LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT

- ## [1.Laravel Framework](https://github.com/Tahsin000/LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT/tree/INDEXING-COURSE/1.Laravel%20Framework)
- ## [2.Getting Started](https://github.com/Tahsin000/LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT/tree/INDEXING-COURSE/2.Getting%20Started)
- ## [3.Accessing Database](https://github.com/Tahsin000/LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT/tree/INDEXING-COURSE/3.Accessing%20Database)
- ## [4.Project-1 (eCommerce)](https://github.com/Tahsin000/LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT/tree/INDEXING-COURSE/4.Project-1%20(eCommerce))
- ## [5.Diving Deep into Laravel](https://github.com/Tahsin000/LARAVEL-FOR-BACK-END-WEB-DEVELOPMENT/tree/INDEXING-COURSE/5.Diving%20Deep%20into%20Laravel)


# Laravel Blade

Laravel Blade is a powerful templating engine that comes with the Laravel framework. It provides a concise and expressive syntax to work with PHP in your views. Here are some common Laravel Blade directives and features you can use in your views:

## Variable Printing

To display a variable value in your view, use `{{ $variable }}`.

## Conditional Statements

- `@if(condition) ... @endif`: If statement.
- `@else`: Else statement.
- `@elseif(condition)`: Else if statement.
- `@unless(condition) ... @endunless`: Unless statement (opposite of if).

## Loops

- `@foreach($items as $item) ... @endforeach`: Foreach loop.
- `@for($i = 0; $i < 5; $i++) ... @endfor`: For loop.
- `@while(condition) ... @endwhile`: While loop.

## Blade Layouts and Extending

- `@extends('layout')`: Extend a layout view.
- `@section('content') ... @endsection`: Define a section in a layout.
- `@yield('content')`: Output the content of a section.
- `@include('partial.view')`: Include a partial view.

## Blade Components

- `@component('component.view', ['variable' => $value]) ... @endcomponent`: Define and include a Blade component.

## Blade Comments

Use `{{-- Comment Here --}}` for Blade comments.

## CSRF Protection

- `@csrf`: Output the CSRF token for forms.

These are just a few examples of what you can do with Laravel Blade. You can find more details and advanced features in the Laravel documentation on the Blade templating engine.
