@extends('layouts.app')

@section('content')
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
  <div class="section section-carousel text-center" id="memories">
    <div class="container">
      <h2 class="title">Our Memories</h2>
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselIndicators" data-slide-to="1"></li>
          <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1624254/pexels-photo-1624254.jpeg?auto=compress&cs=tinysrgb&h=350" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>...</h5>
              <p>...</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/1443657/pexels-photo-1443657.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>...</h5>
              <p>...</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/673803/pexels-photo-673803.jpeg?auto=compress&cs=tinysrgb&h=350" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>...</h5>
              <p>...</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="section section-contact-us text-center" id="contact">
    <div class="container">
      <h2 class="title">Want to work with us?</h2>
      <p class="description">Drop a message to us about your CSR projects.</p>
      <div class="row">
        <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
          <form action="{{ url('outsideProject') }}" method="POST">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="full_name" placeholder="Full Name">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="message" rows="4" cols="80" placeholder="Type a message"></textarea>
            </div>
            <div class="send-button">
              <input type="submit" class="btn btn-success-new btn-round btn-block btn-lg" value="Send Message">
            </div>
          </form>
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
            <i class="fas fa-at"></i>
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
@endsection