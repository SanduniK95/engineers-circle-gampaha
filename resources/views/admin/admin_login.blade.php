 
<!DOCTYPE html>
<!-- admin login page -sachintha -->
<html lang="en">

<head>
  
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("now-ui-landing/assets/img/apple-icon.png") }}">
  <link rel="icon" type="image/png" href="{{ asset("now-ui-landing/assets/img/favicon.png") }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Engineer's Circle Gampaha
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset("now-ui-landing/assets/css/bootstrap.min.css") }}" rel="stylesheet" />
  <link href="{{ asset("now-ui-landing/assets/css/now-ui-kit.css") }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset("now-ui-landing/assets/demo/demo.css") }}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
 
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="white">
    <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
          @if(Session::has('flash_message_error'))
               
               <div class="alert alert-error alert-block" role="alert">
               <button type="button" class="close" data-dismiss="alert" ><a style="text-decoration: none;" href="{{url('admin')}}">×</a></button>
                       <strong>{!!session('flash_message_error')!!}</strong>
                </div>
          @endif
          @if(Session::has('flash_message_success'))
               
               <div class="alert alert-error alert-block" role="alert">
               <button type="button" class="close" data-dismiss="alert" ><a style="text-decoration: none;" href="{{url('admin')}}">×</a></button>
                       <strong>{!!session('flash_message_success')!!}</strong>
                </div>
          @endif
            <form id="loginform" class="form" method="post" action="{{url('admin')}} ">{{ csrf_field() }}
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="../assets/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
             <h3 style="align='center'"><b> Enginnering Circle Gampaha</b></h3>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="email" name="email" placeholder="Email..."   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                </div>
                
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Password..."  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
              </div>
              
       
              <div class="card-footer text-center">
                <input type="submit" value="Login" class="btn btn-primary btn-round btn-lg btn-block"/>
                <div class="pull-left">
                  <h6>
                    <a href="#pablo" class="link">Lost Password</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link"> Help?</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
</body>

</html>