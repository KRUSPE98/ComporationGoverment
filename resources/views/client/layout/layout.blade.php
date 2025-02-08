<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- Styles CSS 19-03-2022 -->
    @include('client.partials.header')
</head>
<body>
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    @include('client.partials.nav')
    @yield('content')
    <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i></a>
    @include('client.partials.footer')




    <!-- Spripts JS 19-03-2022 -->
    @include('client.partials.scripts')
</body>
</html>
