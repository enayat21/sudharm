<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title') | Sudharm</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('theme/assets/images/favicon.ico') }}">
    
    <!-- Bootstrap Css -->
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('theme/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('theme/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    
</head>
    <body style="background:#222736">
        <div class="account-pages pt-sm-5">
            @yield('content')
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('theme/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/node-waves/waves.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('theme/assets/js/app.js') }}"></script>
        <script src="{{ asset('theme/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('theme/assets/js/script.js') }}"></script>

        @stack('page-js')
        
    </body>
</html>
