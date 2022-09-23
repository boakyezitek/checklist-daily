<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- Styles -->
    <link href="{{ asset('css/theme/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme/app-ltl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme/app.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>



  @yield('links')
  <!-- jQuery  -->
<script src="{{ asset('js/theme/jquery.min.js') }}"></script>
<script src="{{ asset('js/theme/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/theme/metismenu.min.js ')}}"></script>
<script src="{{ asset('js/theme/waves.js')}}"></script>
<script src="{{ asset('js/theme/feather.min.js ')}}"></script>
<script src="{{ asset('/js/theme/simplebar.min.js') }}"></script>
<script src="{{ asset('js/theme/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/theme/moment.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('js/theme/app.js') }}"></script>
<!-- App js -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
