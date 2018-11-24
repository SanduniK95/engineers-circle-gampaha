<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("now-ui-landing/assets/img/apple-icon.png") }}">
  <link rel="icon" type="image/png" href="{{ asset("now-ui-landing/assets/img/favicon.png") }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Engineers' Circle Gampaha
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset("now-ui-landing/assets/css/bootstrap.min.css") }}" rel="stylesheet" />
  <link href="{{ asset("now-ui-landing/assets/css/now-ui-kit.css") }}" rel="stylesheet" />
  <link href="{{ asset("now-ui-landing/assets/css/ecg-style.css") }}" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-success-new fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="">
          Engineers' Circle Gampaha
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#story">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{ asset("now-ui-landing/assets/img/DSC_0215_edit.jpg") }}');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Engineers' Circle Gampaha</h1>
        </div>
      </div>
    </div>
    <div class="section section-about-us" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Who we are?</h2>
            <h5 class="description"><b>Engineers' Circle Gampaha</b> is a forum for Engineers to share their experiences and enhance the relationships among the fellow Engineers towards the betterment of society.</h5>
          </div>
        </div>
        <div class="separator separator-success-new" id="story"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('{{ asset("now-ui-landing/assets/img/login.jpg") }}')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-success-new">
                  <small>We are ECG!</small>
                  <br>
                  <br>
                "For 20 years we at ECG have worked hand in hand and served the community in many ways."
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container" style="background-image: url('{{ asset("now-ui-landing/assets/img/bg3.jpg") }}')"></div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('{{ asset("now-ui-landing/assets/img/bg1.jpg") }}')"></div>
              <h2 class="title">Our Story</h2>
              <p>The Engineers' Circle was established on 4th October 1998 with the intention of creating a "forum for Engineers in the Gampaha District to share their experiences and contribute towards the betterment of the society." Established with the participation of twenty Engineers residing in and around of Gampaha, present membership boasts of over two hundred members spread over government and private sectors.
              </p>
              <p>ECG is a non profit organization  and holds its events regularly, most preferably quarterly. The activities are mainly concentrated on Corporate Social Responsibility (CSR).
              </p>
              <p>A vital element in the Circle’s community engagement strategy is member volunteerism. The ECG functions on the assistance of the Circle's member volunteers in all its CSR projects. Member volunteerism is also a means of attracting and retaining members, with new recruits being made aware of volunteering opportunities and encouraged to volunteer as a part of the CSR programme of the ECG. More than 100 member volunteers along with their family members engage in projects undertaken by the ECG each year.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-team text-center">
      <div class="container">
        <h2 class="title">Here is our team</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset("now-ui-landing/assets/img/avatar.jpg") }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Romina Hadid</h4>
                <p class="category text-success-new">Model</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset("now-ui-landing/assets/img/ryan.jpg") }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Ryan Tompson</h4>
                <p class="category text-success-new">Designer</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ asset("now-ui-landing/assets/img/eva.jpg") }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Eva Jenner</h4>
                <p class="category text-success-new">Fashion</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-youtube"></i></a>
                <a href="#pablo" class="btn btn-success-new btn-icon btn-round"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-contact-us text-center" id="contact">
      <div class="container">
        <h2 class="title">Want to work with us?</h2>
        <p class="description">Your project is very important to us.</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="First Name...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
            </div>
            <div class="send-button">
              <a href="#pablo" class="btn btn-success-new btn-round btn-block btn-lg">Send Message</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-default">
      <div class="container">
        <nav>
          <ul>
            <li>
              <i class="fa fa-envelope"></i>
              &nbsp; 57, Vijaya Road, Gampaha
            </li><br>
            <li>
              <i class="fas fa-phone"></i>
              &nbsp; 033 222 6322
            </li><br>
            <li>
              <i class="fas fa-at    "></i>
              &nbsp; info@engineerscirclegampaha.org
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          Copyright &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script> Engineers' Circle Gampaha
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset("now-ui-landing/assets/js/core/jquery.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("now-ui-landing/assets/js/core/popper.min.js") }}" type="text/javascript"></script>
  <script src="{{ asset("now-ui-landing/assets/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset("now-ui-landing/assets/js/plugins/bootstrap-switch.js") }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset("now-ui-landing/assets/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset("now-ui-landing/assets/js/plugins/bootstrap-datepicker.js") }}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset("now-ui-landing/assets/js/now-ui-kit.js?v=1.2.0") }}" type="text/javascript"></script>
</body>

</html>