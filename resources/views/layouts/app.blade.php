<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>{{ config('app.name')  }} - - @yield('title') </title> --}}
    <title>Learning Corner - @yield('title') </title>


    {{-- <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" /> --}}
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('font-awesome/css/font-awesome.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" >
    <link rel="stylesheet" href="{!! asset('css/plugins/summernote/summernote-bs4.css') !!}" >
    <link rel="stylesheet" href="{!! asset('css/animate.css') !!}" >
    {{-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> --}}



</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            {{-- @include('layouts.footer') --}}

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->


    <!-- Mainly scripts -->
    <script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript" defer></script>
    <script src="{!! asset('js/inspinia.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/popper.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
    {{-- <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script> --}}
    <script src="{!! asset('js/plugins/summernote/summernote-bs4.js') !!}" type="text/javascript"></script>

    <!-- Toastr -->
    <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}" type="text/javascript"></script>
    {{-- <script src="js/plugins/toastr/toastr.min.js"></script> --}}

@section('scripts')
<script>
    // alert('hola');
</script>
@show

</body>
</html>
