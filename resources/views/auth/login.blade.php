<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LC | Login</title>

    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    
    
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Blog+</h1>

            </div>
            <h3>Welcome to The Tecnical Blog+</h3>
            <p>El Portal para Aprendizaje y esparcimiento.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form lass="m-t" role="form"  method="POST" action="{{ route('login') }}">

            {{-- <form class="m-t" role="form" action="{{ route('login') }}"> --}}
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="Email" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- <input type="email" class="form-control" placeholder="Username" required=""> --}}
                </div>
                <div class="form-group">
                    {{-- <input type="password" class="form-control" placeholder="Password" required=""> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="Pass">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->

    <script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>
    {{-- <script src="{!! asset('js/inspinia.js') !!}" type="text/javascript"></script> --}}
    <script src="{!! asset('js/popper.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}" type="text/javascript"></script>



 

</body>

</html>
