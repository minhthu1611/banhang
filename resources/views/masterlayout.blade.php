<!DOCTYPE html>
<html lang="en">

 <head> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <meta name="author" content="INSPIRO" /> 
    <meta name="description" content="Themeforest Template Polo"> 
    <!-- Document title --> 
    <title>Electronics</title> 
    <!-- Stylesheets & Fonts --> 
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" /> 
    <link href="{{ asset('/assets/layout/css/plugins.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/assets/layout/css/style.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/assets/layout/css/responsive.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/assets/layout/css/effect.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/assets/layout/css/custom.css') }}" rel="stylesheet"> 
    <script src="{{ asset('/assets/layout/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/layout/js/plugins.js') }}"></script>
   
   <!--Template functions-->
    <script src="{{ asset('/assets/layout/js/functions.js') }}"></script>
     <script src="{{ asset('/assets/layout/js/menu.js') }}"></script>
</head>

<body data-animation-icon="20" >
    <!-- Wrapper -->
    <div>
        <!-- Header -->
        @include('modules.navabar')
        <!-- Header -->
        <!-- Content -->
        @yield('content')
        <!-- end: Content -->


        <!-- Footer -->
        @include("modules.footer")
        <!-- Footer -->
    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a><!--Plugins-->

</body>

</html>
