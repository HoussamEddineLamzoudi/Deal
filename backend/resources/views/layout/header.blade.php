<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/origin.css') }}">
    <title>@yield('pageName')</title>
</head>
<body>

    @include('layout/navBar')
    <div class="page content" >
        @yield('page-content')
    </div>
    @include('layout/footer')
