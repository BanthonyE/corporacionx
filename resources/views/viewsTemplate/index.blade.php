<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon -->
<link rel="icon" href="assets\imgs\favicon.ico" type="image/x-icon">
<!-- Favicon -->
<title>Architevo Builder : Construction Services</title>
<!-- Bootstrap core CSS -->
<link href="assets\home\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
<link href="assets\home\vendor\fontawesome-free\css\all.min.css" rel="stylesheet" type="text/css">
<link href="assets\font-icons\material-design-iconic-font\css\materialdesignicons.min.css" rel="stylesheet" type="text/css">
<link href="assets\home\js\wow\animate.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets\home\css\home2.css" rel="stylesheet">
<!-- page css -->
<link href="assets\home\css\progressbar-page.css" rel="stylesheet">
<link href="assets\home\css\home2-responsive.css" rel="stylesheet">
</head>
<body class="loading">
<!-- preloader-->
<div id="preloader"></div>
<div class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid p-0 position-relative">
      <div class="top-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-uppercase font-14">Welcome to <strong class="text-themecolor">Architevo Builder</strong></div>
            <div class="col-md-6 text-right">
              <div class="social-media-1"><a href=""><i class="fab fa-twitter"></i></a> <a href=""><i class="fab fa-facebook-f"></i></a> <a href=""><i class="fab fa-instagram"></i></a> <a href=""><i class="fab fa-youtube"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row w-100">
        <div class="col-md-5"><a class="navbar-brand" href="{{ route('index') }}"> <img src="assets\imgs\logo.png" alt="" title="" class="img-fluid"> </a> </div>
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-9 p-0 top-css">
              <ul>
                <li class="pr-3"><i class="fa fa-mobile-alt"></i> +1 23 567 8596<br>
                  <a href="">info@examplea.com</a> </li>
                <li class="pr-3"> <i class="fa fa-map-marked"></i> 660 Broklyn Street, <br>
                  88 New York, USA </li>
              </ul>
            </div>
            <div class="col-md-3 p-0 text-right"><a href="" class="btn get-a-free-quote position-absolute mt-3" data-toggle="modal" data-target="#myModal3">Get A Quote </a> </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Home </a>
              <div class="dropdown-menu"> <a href="{{ route('index') }}" class="dropdown-item">Home v1</a> <a href="{{ route('index-2') }}" class="dropdown-item">Home v2</a> <a href="{{ route('index-3') }}" class="dropdown-item">Home v3</a></div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> About </a>
              <div class="dropdown-menu"><a href="{{route('about')}}" class="dropdown-item">About Us</a> <a href="{{ route('about-2') }}" class="dropdown-item"> About Us V2</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Services </a>
              <div class="dropdown-menu"> <a href="{{ route('services') }}" class="dropdown-item">Services</a> <a href="{{ route('services-2') }}" class="dropdown-item">Services V2</a> <a href="{{ route('service-details') }}" class="dropdown-item">Services Details</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Projects </a>
              <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('projects') }}">Projects</a> <a class="dropdown-item" href="{{ route('projects-2') }}">Projects V2</a> <a class="dropdown-item" href="{{ route('projects-lightbox') }}">Projects Lighbox</a> <a class="dropdown-item" href="{{ route('projects-lightbox-description') }}">Projects Lighbox Description</a> <a class="dropdown-item" href="{{ route('project-details') }}">Projects Details</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Pages </a>
              <div class="dropdown-menu"> <a href="{{ route('coming-soon') }}" class="dropdown-item">Coming Soon</a> <a href="{{ route('page-not-found') }}" class="dropdown-item">Page Not Found</a> <a href="{{ route('faq') }}" class="dropdown-item">FAQ</a> <a href="{{ route('privacy') }}" class="dropdown-item">Privacy</a> <a href="{{ route('support') }}" class="dropdown-item">Support</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Blog </a>
              <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a> <a class="dropdown-item" href="{{ route('blogs-grid-1') }}">Blogs Grid</a> <a class="dropdown-item" href="{{ route('blogs-grid-2') }}">Blogs Grid V2</a> <a class="dropdown-item" href="{{ route('blogs-3') }}">Blogs Left Sidebar</a> <a class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a> <a class="dropdown-item" href="{{ route('blog-details-2') }}">Blog Details Left Sidebar</a> </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Contact Us </a>
              <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('contact') }}">Contact Us 1</a> <a class="dropdown-item" href="{{ route('contact-2') }}">Contact Us 2</a> </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <header>
    <div id="carousel-1" class="carousel slide" data-ride="carousel">
      <div class="position-relative">
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-1" data-slide-to="1"> </li>
          <li data-target="#carousel-1" data-slide-to="2"> </li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('assets/imgs/home2/banner2.jpg')">
            <div class="carousel-caption banner-text">
              <h3 class="text-center">Architevo Builder</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <a href="#" class="btn btn-primary">Learn More</a> </div>
          </div>
          <div class="carousel-item" style="background-image: url('assets/imgs/home2/banner.jpg')">
            <div class="carousel-caption  banner-text">
              <h3 class="text-center">Architevo Builder</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
              <a href="#" class="btn btn-primary">Learn More</a> </div>
          </div>
          <div class="carousel-item" style="background-image: url('assets/imgs/home2/banner3.jpg')">
            <div class="carousel-caption  banner-text">
              <h3 class="text-center">Architevo Builder</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
              <a href="#" class="btn btn-primary">Learn More</a> </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"> <i class='fas fa-chevron-left arrow-css'></i></a> <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"> <i class='fas fa-chevron-right arrow-css'></i></a> </div>
    </div>
  </header>
  <div class="container">
    <div class="section services-sec">
      <div class="heading text-center">
        <p class="text-uppercase">Services Quality</p>
        <h2 class="text-center text-uppercase">Our <span>Services</span></h2>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"> <img src="assets\imgs\home2\services\services1.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\blueprint.svg" width="45" alt="" title=""></div>
              <h4>contracting</h4>
              <p>Ut at bibendum quam pharetra arcu sodales.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"> <img src="assets\imgs\home2\services\services2.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\brickwall.svg" width="45" alt="" title=""></div>
              <h4>construction</h4>
              <p>Ut at bibendum quam magna eget elit dictum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"><img src="assets\imgs\home2\services\services3.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\construction.svg" width="45" alt="" title=""></div>
              <h4>Repairment</h4>
              <p>Ut arcu sodales magna eget elit dictum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"> <img src="assets\imgs\home2\services\services4.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\engineer.svg" width="45" alt="" title=""></div>
              <h4>Home Making</h4>
              <p>Ut at bibendum quam pharetra arcudictum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"><img src="assets\imgs\home2\services\services5.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\helmet.svg" width="45" alt="" title=""></div>
              <h4>Electric Works</h4>
              <p>Pharetra arcu sodales magna eget elit dictum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center mb-4">
          <div class="position-relative rounded overflow-hidden bg-dark box-section"> <img src="assets\imgs\home2\services\services6.jpg" class="img-fluid" alt="" title="">
            <div class="position-absolute box">
              <div class="icon-css"><img src="assets\imgs\home2\work.svg" width="45" alt="" title=""></div>
              <h4>Other services</h4>
              <p>Ut at bibendum sodales magna eget elit dictum.</p>
            </div>
          </div>
        </div>
        <div class="text-center w-100 col"><a href="{{ route('services') }}" class="btn btn-primary btn-css d-inline-block"> View All Services </a></div>
      </div>
    </div>
  </div>
  <section class="projects-section">
    <div class="container-fluid p-0">
      <div class="heading boder2 text-center">
        <h2 class="text-center text-uppercase text-white">Our <span>Projects</span></h2>
        <div class="row m-0">
          <div class="col-lg-3 col-md-4  p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"> <a data-fancybox="images" href="assets\imgs\home2\portfolio\1-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
              <img src="assets\imgs\home2\portfolio\1.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\2-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\2.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\3-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\3.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\4-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\4.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\5-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\5.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\6-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\6.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\7-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\7.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
          <div class="col-lg-3 col-md-4 p-0">
            <div class="img-hover-div">
              <div class="img-hover position-absolute"><a data-fancybox="images" href="assets\imgs\home2\portfolio\8-big.jpg"><i class="fa fa-search" aria-hidden="true"></i></a> <a href="projects.html"><i class="fa fa-link" aria-hidden="true"></i></a></div>
              <img src="assets\imgs\home2\portfolio\8.jpg" alt="" title="" class="img-fluid w-100"> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-5 pb-5">
      <div class="text-center w-100 col"><a href="{{ route('projects') }}" class="btn btn-primary btn-css d-inline-block font-weight-bold">View All Projects</a></div>
    </div>
  </section>
  <div class="about-us">
    <div class="heading text-center">
      <p class="text-uppercase">About Us</p>
      <h2 class="text-center text-uppercase pt-0">Home<span> Builder</span></h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-right"> <i class="fa fa-thumbs-up icon-css-2" aria-hidden="true"></i>
          <h3 class="Lato">Professional works</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor sed.</p>
          <i class="fas fa-bolt icon-css-2"></i>
          <h3>Fast And Warranty Work</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor sed.</p>
        </div>
        <div class="col-md-4 text-center"><img src="assets\imgs\home2\about-home.png" alt="" title="" class="img-fluid"></div>
        <div class="col-md-4"> <i class="fa fa-comment icon-css-2" aria-hidden="true"></i>
          <h3>Support 24/7</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor sed.</p>
          <i class="fa fa-trophy icon-css-2"></i>
          <h3>Certification</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet dolor sed.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="customers-section">
    <div class="container-fluid">
      <div class="container">
        <div class="heading boder2 text-center">
          <p class="text-uppercase text-white">Customer Feedback</p>
          <h2 class="text-center text-uppercase pt-0 text-white">Our happy <span>customers</span></h2>
        </div>
        <div class="container">
          <div class="our-happy-customers owl-carousel owl-theme">
            <div class="item">
              <div class="customers-text">
                <p class="oswald text-white">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                <div class="mr-3 left-text"><img src="assets\imgs\home\customers-1.jpg" alt="" title="" class="rounded-circle" width="50"></div>
                <div class="left-text">
                  <h4 class="text-white">Austin Daniels </h4>
                  <span class="text-white">UX Designer in Envato</span> </div>
              </div>
            </div>
            <div class="item">
              <div class="customers-text">
                <p class="oswald text-white">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                <div class="mr-3 left-text"><img src="assets\imgs\home\customers-2.jpg" alt="" title="" class="rounded-circle" width="50"></div>
                <div class="left-text">
                  <h4 class="text-white">Carolyn Rogers</h4>
                  <span class="text-white">Marketing in Envato</span> </div>
              </div>
            </div>
            <div class="item">
              <div class="customers-text">
                <p class="oswald text-white">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                <div class="mr-3 left-text"><img src="assets\imgs\home\customers-3.jpg" alt="" title="" class="rounded-circle" width="50"></div>
                <div class="left-text">
                  <h4 class="text-white">Benjamin Carter</h4>
                  <span class="text-white">Visual Designer in SkyJet</span> </div>
              </div>
            </div>
            <div class="item">
              <div class="customers-text">
                <p class="oswald text-white">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                <div class="mr-3 left-text"><img src="assets\imgs\home\customers-3.jpg" alt="" title="" class="rounded-circle" width="50"></div>
                <div class="left-text">
                  <h4 class="text-white">Benjamin Carter</h4>
                  <span class="text-white">Visual Designer in SkyJet</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="work-with-us">
    <div class="container">
      <h2 class="text-white text-center">Are you looking to work with us?</h2>
      <div class="text-center"><a href="" class="btn btn-dark"><i class="fa fa-mobile-alt"></i> +123 567 8596</a></div>
    </div>
  </div>
  <div class="our-blogs">
    <div class="heading text-center">
      <p class="text-uppercase">Our Blogs</p>
      <h2 class="text-center text-uppercase pt-0">Our Latest <span> News </span></h2>
    </div>
    <div class="container">
      <div class="our-latest-news owl-carousel owl-theme">
        <div class="itme">
          <div class="news-boder">
            <div class="position-relative">
              <div class="date-1"><i class='far fa-clock'></i> 11 Jan, 2020</div>
              <img src="assets\imgs\home2\news\img-1.jpg" alt="" title="" class="img-fluid w-100"></div>
            <h2>Nulla vehicula magna maximus.</h2>
            <p>Nam tincidunt imperdiet consectet lobort lorem tristique vel. Proin rhoncus augue dui, vel pretium massa efficitur eu.</p>
            <a href="{{ route('blog-details') }}">Read More <i class="fa fa-angle-right"></i></a></div>
        </div>
        <div class="itme">
          <div class="news-boder">
            <div class="position-relative">
              <div class="date-1"><i class='far fa-clock'></i> 10 Jan, 2020</div>
              <img src="assets\imgs\home2\news\img-2.jpg" class="img-fluid w-100" alt="" title=""> </div>
            <h2>Nulla vehicula magna maximus.</h2>
            <p>Nam tincidunt imperdiet consectet lobort lorem tristique vel. Proin rhoncus augue dui, vel pretium massa efficitur eu.</p>
            <a href="{{ route('blog-details') }}">Read More <i class="fa fa-angle-right"></i></a></div>
        </div>
        <div class="itme">
          <div class="news-boder">
            <div class="position-relative">
              <div class="date-1"><i class='far fa-clock'></i> 15 Jan, 2020</div>
              <img src="assets\imgs\home2\news\img-3.jpg" class="img-fluid w-100" alt="" title=""> </div>
            <h2>Nulla vehicula magna maximus.</h2>
            <p>Nam tincidunt imperdiet consectet lobort lorem tristique vel. Proin rhoncus augue dui, vel pretium massa efficitur eu.</p>
            <a href="{{ route('blog-details') }}">Read More <i class="fa fa-angle-right"></i></a></div>
        </div>
        <div class="itme">
          <div class="news-boder">
            <div class="position-relative">
              <div class="date-1"><i class='far fa-clock'></i> 19 Jan, 2020</div>
              <img src="assets\imgs\home2\news\img-4.jpg" class="img-fluid w-100" alt="" title=""></div>
            <h2>Nulla vehicula magna maximus.</h2>
            <p>Nam tincidunt imperdiet consectet lobort lorem tristique vel. Proin rhoncus augue dui, vel pretium massa efficitur eu.</p>
            <a href="{{ route('blog-details') }}">Read More <i class="fa fa-angle-right"></i></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="subscribe-us">
    <div class="container text-center">
      <div class="text-center"> <i class="far fa-envelope theme-color"></i> </div>
      <h2 class="text-center text-uppercase pt-0  font-weight-bold">Subscribe <span class="text-white"> Us </span></h2>
      <p class="text-white">Subscribe Us For The Latest News And Discount Events.</p>
      <div class="home-newsletter">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Enter your email">
          <span class="input-group-btn">
          <button class="btn btn-theme" type="submit">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </span> </div>
      </div>
    </div>
  </div>
  <div class="footer-logos content-section section-top text-center" id="clients">
    <div class="container">
      <div class="heading text-center">
        <p class="text-uppercase">Partners</p>
        <h2 class="text-center text-uppercase pt-0 mb-4">Our <span> Clients</span></h2>
      </div>
      <div id="owl-demo" class="owl-carousel owl-carousel-2">
        <div class="item"><img src="assets\imgs\logo-carousel\logo1.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo2.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo3.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo4.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo5.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo1.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo2.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo3.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo4.png" alt=""></div>
        <div class="item"><img src="assets\imgs\logo-carousel\logo5.png" alt=""></div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <h3>Contact Us</h3>
        <ul class="contact-us">
          <li>
            <div class="icon-css2 text-center"><i class="fa fa-mobile-alt" aria-hidden="true"></i></div>
            <span class="no-css m-0">+1 23 567 8596</span>
            <p class="m-0">Support 24/7 Weekdays</p>
          </li>
          <li>
            <div class="icon-css2 text-center"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></div>
            660 Broklyn Street, 88 New York, USA</li>
          <li>
            <div class="icon-css2 text-center"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6">
        <h3>Our Services</h3>
        <ul>
          <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i> Contracting</a></li>
          <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i> Construction </a></li>
          <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i> Repairment </a></li>
          <li><a href="{{ route('service-details') }}"><i class="fas fa-angle-right"></i> Safety</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3>Pages</h3>
        <ul>
          <li><a href="{{ route('faq') }}"><i class="fas fa-angle-right"></i> FAQ</a></li>
          <li><a href="{{ route('privacy') }}"><i class="fas fa-angle-right"></i> Privacy Policy</a></li>
          <li><a href="{{ route('support') }}"><i class="fas fa-angle-right"></i> Terms & Conditions</a></li>
          <li><a href="{{ route('contact') }}"><i class="fas fa-angle-right"></i> Contact us</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h3>REQUEST A QUOTE</h3>
        <div class="request-a-quote">
          <div class="form-group">
            <input class="form-control" value="Name">
          </div>
          <div class="form-group">
            <input class="form-control" value="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="3">Message</textarea>
          </div>
          <a class="btn sent-message">SEND MESSAGE</a></div>
      </div>
    </div>
  </div>
  <div class="container-fluid copyright">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
          <p>© 2020 <a href="{{ route('index') }}">Architevo Builder</a> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Form Script -->
<div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>
      <div class="modal-body bgcolor">
        <div>
          <div class="col-xs-12 col-md-12 right-section form-sec">
            <div class="page-subheader">
              <h2 class="text-dark">request a quote</h2>
            </div>
            <div class="border"></div>
            <div class="description">
              <p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.</p>
            </div>
            <form action="/" method="post" id="requestForm">
              <div class="form-group no-margin">
                <div class="controls col-xs-6 no-padding-left">
                  <input class="form-control input" placeholder="Name" name="name" id="name" type="text">
                </div>
                <div class="controls col-xs-6 no-padding-right">
                  <input class="form-control input" placeholder="Email" name="email" id="email" type="text">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group no-margin">
                <div class="controls col-xs-6 no-padding-left">
                  <input class="form-control input" placeholder="Service Type" name="service_type" id="service_type" type="text">
                </div>
                <div class="controls col-xs-6 no-padding-right">
                  <input class="form-control input" placeholder="Contact no." name="contact_no" id="contact_no" type="text">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group no-margin">
                <div class="controls">
                  <textarea class="form-control textarea" placeholder="Message" name="message" id="message"></textarea>
                </div>
              </div>
              <div class="form-group">
                <input value="SUBMIT" onclick="return ajaxmailrequest();" class="btn btn-clear" type="button">
                <!--<button class="btn btn-clear">SUBMIT</button>-->
                <button class="btn btn-clear blue-btn">Reset</button>
                <div class="loader2"></div>
              </div>
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Form Script -->
<script src="assets\js\ajax.js"></script>
<script src="assets\js\formValidation.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="assets\home\vendor\jquery\jquery.min.js"></script>
<script src="assets\home\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
<!-- Owl Carousel -->
<script src="assets\js\owlcarousel\owl.carousel.min.js"></script>
<!--wow-->
<script src="assets\home\js\wow\wow.js"></script>
<script src="assets\home\js\wow\page.js"></script>
<!--fancybox-->
<link rel="stylesheet" href="assets\home\js\fancybox\jquery.fancybox.min.css">
<script src="assets\home\js\fancybox\jquery.fancybox.min.js"></script>
<!-- fix-nav -->
<script src="assets\home\js\fix-nav.js"></script>
<!--page-->
<script src="assets\home\js\page.js"></script>
<!-- Scroll to Top -->
<script src="assets\js\scrolltopcontrol.js"></script>
</body>
</html>