<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} @stack('title')</title>
    @stack('styles')
</head>

<body>
    <div id="wrapper">
        @include('includes.front-page.header')
         
            @yield('content')
        
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <footer>
            <div class="container">
                <div class="text-center">
                    Copyright © 2021 PPDB {{ env('APP_NAME') }}
                </div>
            </div>
        </footer>

    </div>
    @stack('scripts')
</body>

</html>