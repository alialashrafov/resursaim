<!doctype html>

<html class="no-js" lang="{{ config('app.locale') }}">



<head>

    <meta charset="utf-8">

    <title>@yield('title', config('app.name'))</title>

    @include('layouts.partials.head')

    @yield('head')

</head>



<body>



<!-- Main Wrapper -->

<div id="main-wrapper">



    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')



</div>



@yield('foot')

@include('layouts.partials.footer-file')



</body>



</html>