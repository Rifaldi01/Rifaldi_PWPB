    <link href="{{URL::to('assets/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{URL::to('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('assets/assets/css/users/login-2.css')}}" rel="stylesheet" type="text/css" />

<body class="login">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <form class="form-login" action="{{route('login')}}" method="POST">
        @csrf
        <div class="row">

            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="{{URL::to('assets/assets/img/logo-3.png')}}" class="theme-logo">
            </div>

            <div class="col-md-12">

                <label for="inputEmail" class="sr-only">Email address</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" aria-describedby="inputEmail" required >
                </div>

                <label for="inputPassword" class="sr-only">Password</label>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" aria-describedby="inputPassword" required >
                </div>

                <div class="checkbox d-flex justify-content-center mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                </div>

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>
                <a href="{{URL::to('auth/google')}}" class="badge badge-trans btn-danger">
                    Login via google
                </a>

                <div class="forgot-pass text-center">
                    <a href="user_pass_recovery_2.html">Forgot Password ?</a>
                </div>

            </div>

            <div class="col-md-12">
                <div class="login-text text-center">
                    <p class="mt-3 text-white">New Here? <a href="user_register_2.html" class="">Register </a> a new user !</p>
                </div>
            </div>

        </div>
    </form>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL::to('assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::to('assets/assets/js/loader.js')}}"></script>
    <script src="{{URL::to('assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::to('assets/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

