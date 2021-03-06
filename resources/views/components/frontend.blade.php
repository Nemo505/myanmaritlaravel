<!DOCTYPE html>
<html lang="en">
      <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>River Bootstrap 4 Template by Grafreez</title>

      <!--Bootstrap core CSS-->
      <link href="{{ asset('frontend/vendor/css/bootstrap.min.css') }}" rel="stylesheet">
      

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- Custom styles for this template -->

      <link href="{{ asset('frontend/vendor/css/custom.css') }}" rel="stylesheet">
      <link href="{{ asset('frontend/vendor/css/responsive-style.css') }}" rel="stylesheet">  
      <link href="{{ asset('frontend/vendor/css/weather-icons.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css/font-awesome.min.css') }} " />
      <link href="{{ asset('frontend/vendor/css/lightbox.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css/loaders.css') }}"/>

      <!-- Custom styles for detail template -->
      <link href="{{asset('frontend/detail/css/blog-post.css')}}" rel="stylesheet">
     <!--  contact us -->
      <link href="{{asset('frontend/contact/assets/css/style.css')}}" rel="stylesheet">
      <style></style>
      </head>

      <body style="padding-top: 0">

      

          <div class="loader loader-bg">
        <div class="loader-inner ball-pulse-rise">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
<header>
    <div class="small-top">
        <div class="container">
            <div class="col-lg-4 date-sec hidden-sm-down">
        <div id="Date"></div>
      </div>
            <div class="col-lg-3 offset-lg-5">
        <div class="social-icon"> <a target="_blank" href="#" class=" fa fa-facebook"></a> <a target="_blank" href="#" class=" fa fa-twitter"></a> <a target="_blank" href="#" class=" fa fa-google-plus"></a> <a target="_blank" href="#" class=" fa fa-linkedin"></a> <a target="_blank" href="#" class=" fa fa-youtube"></a> <a target="_blank" href="#" class=" fa fa-vimeo-square"></a> </div>
      </div>
          </div>
  </div>
        <div class="top-head left">
    <div class="container">
            <div class="row">
        <div class="col-md-6 col-lg-4">
                <h1>Grafreez News<small>Get the latest News</small></h1>
              </div>
        <div class="col-md-6 col-lg-5 offset-lg-3 admin-bar hidden-sm-down">
                {{-- <nav class="nav nav-inline"> <a href="#" class="nav-link">Bruce Wayne <img class="img-fluid img-circle" src="storage/image/news.jpg"></a> </nav> --}}
              </div>
      </div>
          </div>
  </div>
      </header>
<nav class="navbar top-nav">
        <div class="container">
    <button class="navbar-toggler hidden-lg-up " type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation"> &#9776; </button>
    <div class="collapse navbar-toggleable-md" id="exCollapsingNavbar2"> <a class="navbar-brand" href="#">Responsive navbar</a>
            <ul class="nav navbar-nav ">
        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.home')}}">Home {{-- <span class="sr-only">(current)</span> --}}</a> </li>
        <li class="nav-item {{ (request()->is('world')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.world')}}">World</a> </li>
        <li class="nav-item {{ (request()->is('politics')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.politics')}}">Politics</a> </li>
        
        <li class="nav-item {{ (request()->is('ent')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.ent')}}">Entertainment</a> </li>
        <li class="nav-item {{ (request()->is('sports')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.sports')}}">Sports</a> </li>
        <li class="nav-item {{ (request()->is('tech')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.tech')}}">Tech</a> </li>
        
        <li class="nav-item {{ (request()->is('health')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.health')}}">Health</a> </li>
        <li class="nav-item {{ (request()->is('lit')) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('frontend.literature')}}">Literature</a> </li>
      </ul>
            <form class="pull-xs-right">
        {{-- <div class="search">
                <input type="text" class="form-control" maxlength="64" placeholder="Search" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div> --}}
      </form>
          </div>
  </div>
      </nav>

  {{ $slot }}

  <!-- Footer -->
  <footer>
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h6 class="heading-footer">ABOUT US</h6>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            <p><i class="fa fa-phone"></i> <span>Call Us :</span> +91 9999 878 398</p>
            <p><i class="fa fa-envelope"></i> <span>Send Email :</span> info@webenlance.com</p>
        </div>
        <div class="col-lg-3 col-md-4">
            <h6 class="heading-footer">QUICK LINKS</h6>
            <ul class="footer-ul">
                <li><a href="#"> Career</a></li>
                <li><a href="{{ route('frontend.privacy')}}"> Privacy Policy</a></li>
                <li><a href="{{ route('frontend.rule')}}"> Terms & Conditions</a></li>
                <li><a href="#"> Client Gateway</a></li>
                
              </ul>
        </div>
            
        <div class="col-lg-3 col-md-4 social-icons">
            <h6 class="heading-footer">FOLLOW</h6>
            <ul class="footer-ul">
                <li><a href="#"><i class=" fa fa-facebook"></i> Facebook</a></li>
                <li><a href="#"><i class=" fa fa-twitter"></i> Twitter</a></li>
                <li><a href="#"><i class=" fa fa-google-plus"></i> Google+</a></li>
                
            </ul>
      </div>
          </div>
  </div>
      </footer>
<!--footer start from here-->

<div class="copyright">
        <div class="container">
    <div class="col-lg-6 col-md-4">
            <p>Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
          </div>
    <div class="col-lg-6 col-md-8">
            <ul class="bottom_ul">
        <li><a href="{{route('frontend.aboutus')}}">About us</a></li>

        
        <li><a href="{{route('frontend.contact')}}">Contact us</a></li>
        
      </ul>
          </div>
  </div>
      </div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="{{ asset('frontend/vendor/js/jquery.min.js') }}"></script> 
<script src="{{ asset('frontend/vendor/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/vendor/js/core.js') }}"></script> 
<script src="{{ asset('frontend/vendor/js/lightbox-plus-jquery.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){
     $(".nav a").on("click", function(){
      $(".nav").find(".active").removeClass("active");
      // $(this).parent().addClass("active");
   });
  });
</script>



</body>
</html>
