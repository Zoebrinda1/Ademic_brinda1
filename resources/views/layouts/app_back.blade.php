<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('back/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('back/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('back/css/all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css')}}">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="{{asset('back/css/fullcalendar.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('back/css/animate.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('back/style.css')}}">
    <!-- Modernize js -->
    <script src="{{asset('back/js/modernizr-3.6.0.min.js')}}"></script>
</head>
<body>
    <div id="preloader"></div>
    <div id="wrapper" class="wrapper bg-ash">
        @include('layouts.back.nav')
        @yield('content')
        @include('layouts.back.footer')
    </div>
       
     <!-- jquery-->
     <script src="{{asset('back/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('back/js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('back/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src="{{asset('back/js/jquery.counterup.min.js')}}"></script>
    <!-- Moment Js -->
    <script src="{{asset('back/js/moment.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{asset('back/js/jquery.waypoints.min.js')}}"></script>
    <!-- Scroll Up Js -->
    <script src="{{asset('back/js/jquery.scrollUp.min.js')}}"></script>
    <!-- Full Calender Js -->
    <script src="{{asset('back/js/fullcalendar.min.js')}}"></script>
    <!-- Chart Js -->
    <script src="{{asset('back/js/Chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('back/js/main.js')}}"></script>
</body>
</html>