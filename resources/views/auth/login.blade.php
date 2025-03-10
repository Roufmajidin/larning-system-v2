<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-blue">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flow</title>


    <meta name="robots" content="noindex">

    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/themes/blue/app.css" rel="stylesheet">
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;"
            data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <span>
                        <!-- SVG Logo -->
                        <svg width="30px" height="30px" viewBox="0 0 23 23" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            preserveAspectRatio="xMaxYMin meet">
                            <defs></defs>
                            <g id="logo-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path
                                    d="M3,-3.15936513e-15 L20,-2.74650094e-15 L20,-2.66453526e-15 C21.6568542,-2.96889791e-15 23,1.34314575 23,3 L23,20 L23,20 C23,21.6568542 21.6568542,23 20,23 L6,23 L3,23 L3,23 C1.34314575,23 1.09108455e-15,21.6568542 8.8817842e-16,20 L0,3 L0,3 C-2.02906125e-16,1.34314575 1.34314575,-3.24835102e-15 3,-3.55271368e-15 Z"
                                    id="Rectangle-5" fill="#4A90E2"></path>
                                <rect id="logo-Rectangle-6" fill="#FFFFFF" x="1.0952381" y="12.0960631"
                                    width="9.96553315" height="9.76943696"></rect>
                                <rect id="logo-Rectangle-6-Copy" fill="#FFFFFF" x="11.9533428" y="1.05597629"
                                    width="9.96553315" height="9.76943696"></rect>
                            </g>
                        </svg>
                        <!-- //End SVG Logo -->
                    </span>
                    <h2 class="ml-2 text-bg mb-0"><strong>flow</strong></h2>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                            <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                {{ csrf_field() }}

                                @error('login_gagal')
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> --}}
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                    <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label>email</label>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    @if($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label>Password</label>
                                        <span class="ml-auto"><a href="forgot-password.html">Forgot password?</a></span>
                                    </div>

                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    @if($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <button class="btn w-100 btn-primary btn-block btn-login" type="submit">Login</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <div class="small">
                        <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer">
    </div>



</body>

</html>
