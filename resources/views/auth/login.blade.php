<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flow</title>


    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/themes/default/app.css" rel="stylesheet">
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-has-scrolling-region>
        <div class="mdk-drawer-layout__content mdk-header-layout__content--scrollable" style="overflow-y: auto;" data-simplebar data-simplebar-force-enabled="true">


            <div class="container h-vh d-flex justify-content-center align-items-center flex-column">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <span><!-- SVG Logo -->
<svg width="30px" height="30px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMaxYMin meet">
    <defs></defs>
    <g id="logo-Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path d="M3,-3.15936513e-15 L20,-2.74650094e-15 L20,-2.66453526e-15 C21.6568542,-2.96889791e-15 23,1.34314575 23,3 L23,20 L23,20 C23,21.6568542 21.6568542,23 20,23 L6,23 L3,23 L3,23 C1.34314575,23 1.09108455e-15,21.6568542 8.8817842e-16,20 L0,3 L0,3 C-2.02906125e-16,1.34314575 1.34314575,-3.24835102e-15 3,-3.55271368e-15 Z" id="Rectangle-5" fill="#6774df"></path>
                <rect id="logo-Rectangle-6" fill="#FFFFFF" x="1.0952381" y="12.0960631" width="9.96553315" height="9.76943696"></rect>
                <rect id="logo-Rectangle-6-Copy" fill="#FFFFFF" x="11.9533428" y="1.05597629" width="9.96553315" height="9.76943696"></rect>
    </g>
</svg>
<!-- //End SVG Logo -->
</span>
                    <h2 class="ml-2 text-bg mb-0"><strong>flow</strong></h2>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="card card-login mb-3">
                        <div class="card-body">
                             <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">account_circle</i>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group--inline">
                                        <div class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div class="form-check">
                                         <div class="custom-control custom-checkbox">
                                            <input name="remember" type="checkbox" class="custom-control-input"  id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }} checkbox</label>
                                        </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="text-center">
                                   <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                    </button>

                                   <div>
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

               
            </div>

        </div>
    </div>
   

</body>

</html>