<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->

    <link href="{{asset('/backoffice/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('/backoffice/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('/backoffice/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('/backoffice/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/backoffice/css/style.css')}}" rel="stylesheet" media="all">

    <style>
        #btn-login{
            color:rgb(254,204,22);
        }
        #btn-login:hover{
            background-color: rgba(255,255,255,0.5);
            color: rgb(0,0,0);
        }
        #a-login-forgetpassword:hover{
            text-decoration: underline;
        }
    </style>

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content shadow-lg p-3 mb-5">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset('/backoffice/images/digitalfactory.png')}}" width="120" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group" style="margin-bottom: 2%">
                                <input class="au-input au-input--full form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group" style="margin-bottom: 4%">
                                <input class="au-input au-input--full form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                </label>
                                <label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" id="a-login-forgetpassword" style="color:#000">Forgotten Password?</a>
                                    @endif
                                </label>
                            </div>
                            <button id="btn-login" class="au-btn au-btn--block btn btn-dark m-b-20" type="submit">sign in</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset('/backoffice/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('/backoffice/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('/backoffice/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('/backoffice/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('/backoffice/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('/backoffice/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('/backoffice/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
