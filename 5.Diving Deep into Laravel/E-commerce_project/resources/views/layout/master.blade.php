<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layout.styles')


</head>
</head>

<body class="animsition">
    @include('share.navbar')
    @yield('content')

    @include('layout.script')
    @include('share.footer')

</body>

</html>