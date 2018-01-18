<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/partner.css">
    <link rel="stylesheet" href="/css/introduction.css">
    <link rel="stylesheet" href="/css/contact-us.css">
    <link rel="stylesheet" href="/css/list-product.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/product-detail.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="/css/payment.css">
    <link rel="stylesheet" href="/css/checkorder.css">
    <link rel="stylesheet" href="/css/payment-success.css">
    <script rel="js/banner.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Load libraries -->
    <!-- IE required polyfills, in this exact order -->

    <script src="{{ elixir('es6-shim/es6-shim.min.js') }}"></script>
    <script src="{{ elixir('zone.js/dist/zone.js') }}"></script>
    <script src="{{ elixir('es6-shim/es6-shim.min.js') }}"></script>
    <script src="{{ elixir('reflect-metadata/Reflect.js') }}"></script>
    <script src="{{ elixir('systemjs/dist/system.src.js') }}"></script>
    <script src="{{ elixir('systemjs.config.js') }}"></script>

{{--    <script src="{{ elixir('@angular/es6/dev/src/testing/shims_for_IE.js') }}"></script>--}}
    {{--<script src="{{ elixir('@angular/bundles/angular2-polyfills.js') }}"></script>--}}
    {{--<script src="{{ elixir('systemjs/dist/system.js') }}"></script>--}}
    {{--<script src="{{ elixir('rxjs/bundles/Rx.js') }}"></script>--}}
    {{--<script src="{{ elixir('rxjs/bundles/Rx.js') }}"></script>--}}
    {{--<script src="{{ elixir('angular2/bundles/angular2.dev.js') }}"></script>--}}
    {{--<script src="{{ elixir('angular2/bundles/router.dev.js') }}"></script>--}}
    {{--<script src="{{ elixir('angular2/bundles/http.dev.js') }}"></script>--}}

    {{--<script src="{{ elixir('js/d3.min.js') }}"></script>--}}
    {{--<script src="{{ elixir('js/c3.min.js') }}"></script>--}}
    {{--<script src="{{ elixir('js/scripts.js') }}"></script>--}}


        <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
</head>
<body>
    {{--<my-app>Loading...</my-app>--}}
    {{--<div class="title">Laravel 5</div>--}}
    @include('header')
    @yield('content')
    @include('partner')
    @include('footer')
</body>
</html>
