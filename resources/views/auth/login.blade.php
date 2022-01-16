<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Log In</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}" />
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
        }

        /* 
        body {
            background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
        } */

        .main-auth {
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-wrapper {
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .auth-box {
            width: 100%;
        }
    </style>
    <style>
        @font-face {
            font-family: font_hanuman;
            src: url('{{asset("fonts/Hanuman Version 2.00.ttf")}}');
        }

        .font-sidebar {
            font-family: font_hanuman;
        }

        .font-hanuman {
            font-family: font_hanuman;
        }

        .font-size-sidebar {
            font-size: 14px;
        }
    </style>
</head>


<body>
    <div class="main-auth">
        <div class="auth-content">
            <div class="main-wrapper">
                <div class="preloader">
                    <div class="lds-ripple">
                        <div class="lds-pos"></div>
                        <div class="lds-pos"></div>
                    </div>
                </div>
                <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
                    <div class="d-none d-md-flex  w-100">
                        <img class="w-100" src="{{asset('assets/images/undraw-book.png')}}" alt="logo" />
                    </div>

                    <div class="w-100 auth-box border border-2-light p-5 font-hanuman">
                        <div id="loginform">
                            <div class="text-center pt-3 pb-3">
                                <span class="text-uppercase fs-3 font-bold ">{{ __('Login Form') }}</span>
                            </div>
                            <form class="form-horizontal mt-3" id="loginform" method="POST" action="{{ route('login',app()->getLocale()) }}">
                                @csrf
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="mdi mdi-account fs-4"></i></span>
                                            </div>
                                            <input type="text" name="code" value="{{ old('code') }}" class="form-control form-control-lg @error('code') is-invalid @enderror fs-5" placeholder="{{__('Usercode')}}" aria-label="Username" aria-describedby="basic-addon1" required="" />
                                            @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror fs-5" placeholder="{{__('Password')}}" aria-label="Password" aria-describedby="basic-addon1" required="" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-top border-secondary">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="pt-3">
                                                <button class="btn btn-success w-100 text-white" type="submit">
                                                    {{__('Login')}}
                                                </button>
                                            </div>
                                            <div class="pt-3">
                                                <a class="btn btn-info float-start" id="to-recover" href="{{route('welcome',app()->getLocale())}}">
                                                    <i class="mdi mdi-arrow-left-bold"></i> {{__('Back')}}
                                                </a>
                                                <a class="btn btn-info float-end" id="to-recover" type="button">
                                                    <i class="mdi mdi-lock"></i> {{__('Forgot Password')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $(".preloader").fadeOut();
        $("#to-recover").on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
        $("#to-login").click(function() {
            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });
    </script>
</body>

</html>