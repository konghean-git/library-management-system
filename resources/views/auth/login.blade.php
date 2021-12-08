<!DOCTYPE html>
<html dir="ltr">

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

        body {
            background-image: linear-gradient(to right, #0f0c29, #302b63, #24243e);
        }

        .main-auth {
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-wrapper {
            width: 100%;
        }

        .auth-box {
            width: 100%;
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
                    <div class="auth-box bg-dark border-top border-secondary p-5">
                        <div id="loginform">
                            <div class="text-center pt-3 pb-3">
                                <span class="db"><img src="../assets/images/logo.png" alt="logo" /></span>
                            </div>
                            <form class="form-horizontal mt-3" id="loginform" method="POST" action="{{ route('login',app()->getLocale()) }}">
                                @csrf
                                <div class="row pb-4">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="mdi mdi-account fs-4"></i></span>
                                            </div>
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror fs-5" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="" />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i class="mdi mdi-lock fs-4"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror fs-5" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="" />
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
                                                <button class="btn btn-info" id="to-recover" type="button">
                                                    <i class="mdi mdi-lock fs-4 me-1"></i> Lost password?
                                                </button>
                                                <button class="btn btn-success float-end text-white" type="submit">
                                                    Login
                                                </button>
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