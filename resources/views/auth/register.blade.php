<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">
    
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/plugins/iCheck/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">



    {{-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> --}}

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">LC+</h1>

            </div>
            <h3>Register to The Blog+</h3>
            <p>Create account to see it in action.</p>
            {{-- <form class="m-t" role="form" action="login.html"> --}}
                <form  class="m-t" role="form" method="POST" action="{{ route('register') }}">
                    @csrf

                <div class="form-group">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    {{-- <input type="text" class="form-control" placeholder="Name" required=""> --}}
                    <input  value="Nombre completo" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    {{-- <input type="email" class="form-control" placeholder="Email" required=""> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                    {{-- <input type="password" class="form-control" placeholder="Password" required=""> --}}
                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>


                <div class="form-group">
                    {{-- <input type="password" class="form-control" placeholder="Password" required=""> --}}
                    {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                    <input placeholder="Retype Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                {{-- @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                </div>

                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                {{-- <button type="submit" class="btn btn-primary block full-width m-b">Register</button> --}}

                <button type="submit" class="btn btn-primary block full-width m-b">
                    {{ __('Register') }}
                </button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    {{-- <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> --}}

    <script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>
    {{-- <script src="{!! asset('js/inspinia.js') !!}" type="text/javascript"></script> --}}
    <script src="{!! asset('js/popper.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}" type="text/javascript"></script>

    <!-- iCheck -->
    {{-- <script src="js/plugins/iCheck/icheck.min.js"></script> --}}
    <script src="{!! asset('js/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>

    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
