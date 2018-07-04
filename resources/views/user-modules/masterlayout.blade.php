<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ngu Ngừ</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('/assets/user/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/user/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/user/style.css') }}">

</head>

<body>
        <div>
                <!-- Header -->
                @include('user-modules.header')
                <!-- Header -->
                <!-- Content -->
                @yield('content')
                <!-- end: Content -->
        
        
                <!-- Footer -->
                @include("user-modules.footer")
                <!-- Footer -->
            </div>
    
    <script src="{{ asset('/assets/user/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('/assets/user/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('/assets/user/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('/assets/user/js/plugins.js') }}"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset('/assets/user/js/classy-nav.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('/assets/user/js/active.js') }}"></script>

</body>

</html>