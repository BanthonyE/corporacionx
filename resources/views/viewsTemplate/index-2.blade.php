<!DOCTYPE html>
<html lang="en">

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
    <link href="assets\font-icons\material-design-iconic-font\css\materialdesignicons.min.css" rel="stylesheet"
        type="text/css">

    <link href="assets\home\js\wow\animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets\home\css\style.css" rel="stylesheet">
    <!-- page css -->
    <link href="assets\home\css\progressbar-page.css" rel="stylesheet">
    <link href="assets\home\css\responsive.css" rel="stylesheet">
</head>

<body class="loading">
    <!-- preloader-->
    <div id="preloader"></div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container-fluid p-0">
            <div class="top-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 oswald"> <a href="mailto:contact@srgit.com"><i class="mdi mdi-email"></i>
                                contact@srgit.com</a> <i class="mdi mdi-cellphone ml-3"></i>123 456 7980</div>
                        <div class="col-md-6 text-right oswald">3298 Galaxy Way Orlando, FL</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container position-relative">
            <div class="mx-auto2"> <a class="navbar-brand logo-mobile" href="{{ route('index') }}"><img
                        src="assets\imgs\logo.png" alt="" title=""></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse text-center" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle active" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Home </a>
                            <div class="dropdown-menu"> <a href="{{ route('index') }}" class="dropdown-item">Home v1</a>
                                <a href="{{ route('index-2') }}" class="dropdown-item">Home v2</a>
                                <a href="{{ route('index-3') }}" class="dropdown-item">Home v3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> About </a>
                            <div class="dropdown-menu">
                                <a href="{{ route('about') }}" class="dropdown-item">About Us</a>
                                <a href="{{ route('about-2') }}" class="dropdown-item"> About Us V2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Services </a>
                            <div class="dropdown-menu"> <a href="{{ route('services') }}"
                                    class="dropdown-item">Services</a> <a href="{{ route('services-2') }}"
                                    class="dropdown-item">Services V2</a> <a href="{{ route('service-details') }}"
                                    class="dropdown-item">Services Details</a> </div>
                        </li>
                        <li class="nav-item logo-desktop"> <a class="nav-link pt-3 pb-1 m-0"
                                href="{{ route('index') }}"><img src="assets\imgs\logo.png" alt="" title=""></a> </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Projects </a>
                            <div class="dropdown-menu"> <a class="dropdown-item"
                                    href="{{ route('projects') }}">Projects</a> <a class="dropdown-item"
                                    href="{{ route('projects-2') }}">Projects V2</a> <a class="dropdown-item"
                                    href="{{ route('projects-lightbox') }}">Projects Lighbox</a> <a
                                    class="dropdown-item" href="{{ route('projects-lightbox-description') }}">Projects
                                    Lighbox
                                    Description</a> <a class="dropdown-item"
                                    href="{{ route('project-details') }}">Projects
                                    Details</a> </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Pages </a>
                            <div class="dropdown-menu"> <a href="{{ route('coming-soon') }}"
                                    class="dropdown-item">Coming Soon</a>
                                <a href="{{ route('page-not-found') }}" class="dropdown-item">Page Not Found</a> <a
                                    href="{{ route('faq') }}" class="dropdown-item">FAQ</a> <a
                                    href="{{ route('privacy') }}" class="dropdown-item">Privacy</a> <a
                                    href="{{ route('support') }}" class="dropdown-item">Support</a> </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Blog </a>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a>
                                <a class="dropdown-item" href="{{ route('blogs-grid-1') }}">Blogs Grid</a> <a
                                    class="dropdown-item" href="{{ route('blogs-grid-2') }}">Blogs Grid V2</a> <a
                                    class="dropdown-item" href="{{ route('blogs-3') }}">Blogs Left Sidebar</a> <a
                                    class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a> <a
                                    class="dropdown-item" href="{{ route('blog-details-2') }}">Blog Details Left
                                    Sidebar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="true" aria-expanded="false"> Contact Us </a>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('contact') }}">Contact
                                    Us 1</a> <a class="dropdown-item" href="{{ route('contact-2') }}">Contact Us 2</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <div class="container position-relative">
                <div class="social-media"> <a href=""><i class="fab fa-facebook-f"></i></a> <a href=""><i
                            class="fab fa-twitter"></i></a> <a href=""><i class="fab fa-instagram"></i></a> </div>
                <a data-toggle="modal" href="" data-target="#myModal" class="get-a-free-quote position-absolute">Get a
                    Free Quote</a>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('assets/imgs/home/banner-1.jpg')">
                    <div class="carousel-caption banner-text">
                        <p class="oswald">Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, </p>
                        <h3>Construction<br>
                            Services</h3>
                        <a href="#" class="btn btn-primary oswald">Learn More</a>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('assets/imgs/home/banner-2.jpg')">
                    <div class="carousel-caption  banner-text">
                        <p class="oswald">Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, </p>
                        <h3>Construction<br>
                            Services</h3>
                        <a href="#" class="btn btn-primary oswald">Learn More</a>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('assets/imgs/home/banner-3.jpg')">
                    <div class="carousel-caption banner-text">
                        <p class="oswald">Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, </p>
                        <h3>Construction<br>
                            Services</h3>
                        <a href="#" class="btn btn-primary oswald  ">Learn More</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"> <i
                    class='fas fa-chevron-left arrow-css'></i></a> <a class="carousel-control-next" href="#carousel-1"
                role="button" data-slide="next"> <i class='fas fa-chevron-right arrow-css'></i></a>
        </div>
    </header>
    <div class="container">
        <div class="section sp-mobile">
            <div class="heading text-center">
                <div><img src="assets\imgs\home\helmet.svg" alt="" title="" width="35" height="35" class="mb-2"></div>
                <p class="text-uppercase">our services</p>
                <h2 class="text-center"> Construction Services </h2>
            </div>
        </div>
        <div class="services owl-carousel owl-theme">
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\blueprint.svg" alt="" title="" width="60">
                    <h4>Contracting</h4>
                </div>
            </div>
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\brickwall.svg" alt="" title="" width="60">
                    <h4>Construction</h4>
                </div>
            </div>
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\engineer.svg" alt="" title="" width="60">
                    <h4>Repairment</h4>
                </div>
            </div>
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\work.svg" alt="" title="" width="60">
                    <h4>Home Making</h4>
                </div>
            </div>
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\blueprint.svg" alt="" title="" width="60">
                    <h4>Electric Works</h4>
                </div>
            </div>
            <div class="item">
                <div class="box oswald"> <img src="assets\imgs\home\blueprint.svg" alt="" title="" width="60">
                    <h4>Other services</h4>
                </div>
            </div>
        </div>
        <div class="slider-section">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-2">
                    <div class="right-box position-relative">
                        <h3 class="oswald"> Lorem ipsum dolor sit amet, ectetur adipiscing elit vehicula est eget </h3>
                        <a href="" class="text-uppercase oswald  d-inline">Read More</a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 mb-2">
                    <div id="carousel-2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-2" data-slide-to="1"></li>
                            <li data-target="#carousel-2" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img src="assets\imgs\home\left-img.jpg" alt="" title=""
                                    class="img-fluid rounded"> </div>
                            <div class="carousel-item"> <img src="assets\imgs\home\left-img.jpg" alt="" title=""
                                    class="img-fluid rounded"> </div>
                            <div class="carousel-item"> <img src="assets\imgs\home\left-img.jpg" alt="" title=""
                                    class="img-fluid rounded"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#carousel-2" data-slide="prev"> <span
                                class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next"
                            href="#carousel-2" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 text-css text-center"> <img src="assets\imgs\home\support.svg" alt="" title=""
                    width="50">
                <h3 class="mt-3">Neque porro quisquam est qu.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit vehicula est eget felis vehicula imperdiet
                    non lacus at quam gravida porta usce viverra consectetur turpis id lacinia dolor sit amet.</p>
                <p><a href="">Read More <i class='fas fa-long-arrow-alt-right'></i></a></p>
            </div>
            <div class="col-md-4 text-css text-center"> <img src="assets\imgs\home\work2.svg" alt="" title=""
                    width="50">
                <h3 class="mt-3">Neque porro quisquam est qu.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit vehicula est eget felis vehicula imperdiet
                    non lacus at quam gravida porta usce viverra consectetur turpis id lacinia dolor sit amet.</p>
                <p><a href="">Read More <i class='fas fa-long-arrow-alt-right'></i></a></p>
            </div>
            <div class="col-md-4 text-css text-center"> <img src="assets\imgs\home\construction.svg" alt="" title=""
                    width="50">
                <h3 class="mt-3">Neque porro quisquam est qu.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit vehicula est eget felis vehicula imperdiet
                    non lacus at quam gravida porta usce viverra consectetur turpis id lacinia dolor sit amet.</p>
                <p><a href="">Read More <i class='fas fa-long-arrow-alt-right'></i></a></p>
            </div>
        </div>
    </div>
    <div class="bg-css">
        <div class="container video">
            <div class="text-center"> <a data-fancybox="" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                    class="btn text-white"><i class='fas fa-play'></i></a></div>
            <h2 class="text-center text-white oswald">We provides the best service<br>
                for sustainable progress</h2>
        </div>
    </div>
    <div class="request-a-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-img">
                        <div class="img-2 position-relative rounded overflow-hidden">
                            <div class="text-right"><img src="assets\imgs\home\img1.jpg" alt="" title="" class="w-100">
                            </div>
                            <div class="phone-n">
                                <div class="rotate oswald"> Lorem Ipsum einfacher </div>
                            </div>
                        </div>
                        <h4 class="text-dark oswald">Lorem Ipsum ist ein einfacher
                            Demo-Text für die Print- und
                            Schriftindustrie. </h4>
                        <h5 class="float-left"> PROJECT </h5>
                        <span class="float-right oswald">85%</span>
                        <div class="clearfix"></div>
                        <div class="progress ">
                            <div class="progress-bar  wow animated progress-animated" style="width: 85%; height:6px;"
                                role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                        <h5 class="float-left"> SERVICES </h5>
                        <span class="float-right oswald">30%</span>
                        <div class="clearfix"></div>
                        <div class="progress">
                            <div class="progress-bar   wow animated progress-animated" style="width: 30%; height:6px;"
                                role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                        </div>
                        <h5 class="float-left"> CONSTRUCTION </h5>
                        <span class="float-right oswald">60%</span>
                        <div class="clearfix"></div>
                        <div class="progress">
                            <div class="progress-bar  wow animated progress-animated" style="width: 65%; height:6px;"
                                role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-md-11">
                        <div class="heading">
                            <p><img src="assets\imgs\home\contact-us.svg" alt="" title="" width="40"></p>
                            <p class="text-uppercase text-white">contact us</p>
                            <h3 class="oswald mb-4">Request a Quote</h3>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary oswald">Get a Free Quote</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-projects">
        <div class="container">
            <div class="heading text-center">
                <div><img src="assets\imgs\home\helmet.svg" alt="" title="" width="35" height="35" class="mb-2"></div>
                <p class="text-uppercase">What we Do</p>
                <h2 class="text-center mb-5">Our Recent Projects</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="projects owl-carousel owl-theme">
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-1.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-2.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-3.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-4.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-5.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
                <div class="item position-relative">
                    <div class="position-absolute img-hover">
                        <div class="img-text">
                            <h4>simply dummy text</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <img src="assets\imgs\home\work-6.jpg" alt="" title="" class="w-100">
                    <div class="image-layer"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo2">
        <div class="container">
            <div class="logo-sec owl-carousel owl-theme">
                <div class="item text-center"><img src="assets\imgs\logo-carousel\logo1.png" alt=""></div>
                <div class="item text-center"><img src="assets\imgs\logo-carousel\logo2.png" alt=""></div>
                <div class="item text-center"><img src="assets\imgs\logo-carousel\logo3.png" alt=""></div>
                <div class="item text-center"><img src="assets\imgs\logo-carousel\logo4.png" alt=""></div>
                <div class="item text-center"><img src="assets\imgs\logo-carousel\logo5.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="happy-customers">
        <div class="container">
            <div class="heading text-center">
                <div><img src="assets\imgs\home\helmet.svg" alt="" title="" width="35" height="35" class="mb-2"></div>
                <p class="text-uppercase text-white">our testimonails</p>
                <h2 class="text-center mb-5 text-white">Happy Customers</h2>
            </div>
            <div class="customers owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonails-box">
                        <div class="mb-4"><img src="assets\imgs\home\customers-1.jpg" alt="" title=""
                                class="rounded-circle"></div>
                        <p class="oswald">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.
                            Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                        <h4> Sarah Albert <span>Director</span></h4>
                        <img src="assets\imgs\home\quote.svg" alt="" title="" width="30">
                    </div>
                </div>
                <div class="item">
                    <div class="testimonails-box">
                        <div class="mb-4"><img src="assets\imgs\home\customers-2.jpg" alt="" title=""
                                class="rounded-circle"></div>
                        <p class="oswald">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.
                            Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                        <h4> Shirley Smith <span>Director</span></h4>
                        <img src="assets\imgs\home\quote.svg" alt="" title="" width="30">
                    </div>
                </div>
                <div class="item">
                    <div class="testimonails-box">
                        <div class="mb-4"><img src="assets\imgs\home\customers-3.jpg" alt="" title=""
                                class="rounded-circle"></div>
                        <p class="oswald">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.
                            Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                        <h4> Mike Hardson <span>Director</span></h4>
                        <img src="assets\imgs\home\quote.svg" alt="" title="" width="30">
                    </div>
                </div>
                <div class="item">
                    <div class="testimonails-box">
                        <div class="mb-4"><img src="assets\imgs\home\customers-3.jpg" alt="" title=""
                                class="rounded-circle"></div>
                        <p class="oswald">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie.
                            Lorem Ipsum ist in der Industrie bereits der Standard Demo.</p>
                        <h4> Sarah Albert <span>Director</span></h4>
                        <img src="assets\imgs\home\quote.svg" alt="" title="" width="30">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Sign up to get latest updates</h4>
                </div>
                <div class="col-md-7">
                    <div class="well">
                        <form method="post" id="subsForm" class="footer-subscribe montserrat text-center"
                            onsubmit="return ajaxmailsubscribe();">
                            <div class="input-group">
                                <input type="hidden" name="from" value="index.html">
                                <input type="email" class="btn btn-lg input-css" name="subsemail" id="subsemail"
                                    placeholder="Enter your Email here">
                                <button class="btn btn-info btn-lg" type="submit"
                                    onclick="return ajaxmailsubscribe();">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><a href=""><img src="assets\imgs\footer-logo.png" alt="" title=""></a></p>
                    <p class="footer-text"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci veliNeque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci veliNeque porro quisquam est qui.</p>
                </div>
                <div class="col-md-2">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="">Safety</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Contact</h3>
                    <p>855 Road Broklyn Street, 600, New York, USA</p>
                    <p><a href="mailto:contact@email.com">contact@email.com</a></p>
                    <p>123 456 7890 </p>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container ">
                <div class="row">
                    <div class="col-md-6">
                        <p>© 2020 <a href="">Architevo Builder</a> All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-media2"> <a href=""><i class="fab fa-twitter"></i></a> <a href=""><i
                                    class="fab fa-facebook-f"></i></a> <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Script -->
    <script src="assets\js\ajax.js"></script>
    <script src="assets\js\formValidation.js"></script>
    <!-- Form Script -->
    <!-- Bootstrap core JavaScript -->
    <script src="assets\home\vendor\jquery\jquery.min.js"></script>
    <script src="assets\home\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
    <!-- javascript -->
    <!-- Owl Carousel -->
    <script src="assets\js\owlcarousel\owl.carousel.min.js"></script>
    <script src="assets\home\js\wow\wow.js"></script>
    <script src="assets\home\js\wow\page.js"></script>
    <!--fancybox-->
    <link rel="stylesheet" href="assets\home\js\fancybox\jquery.fancybox.min.css">
    <script src="assets\home\js\fancybox\jquery.fancybox.min.js"></script>
    <!-- fancybox -->
    <!-- Scroll to Top -->
    <script src="assets\home\js\fix-nav.js"></script>
    <!-- Scroll to Top -->
    <script src="assets\home\js\page.js"></script>
    
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bgcolor">
                    <div>
                        <div class="col-xs-12 col-md-12 right-section form-sec">
                            <div class="page-subheader">
                                <h2 class="text-dark">request a quote</h2>
                            </div>
                            <div class="border2"></div>
                            <div class="description">
                                <p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <form action="/" method="post" id="requestForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input w-100" placeholder="Name" name="name"
                                                id="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input w-100" placeholder="Email" name="email"
                                                id="email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input" placeholder="Service Type"
                                                name="service_type" id="service_type" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input" placeholder="Contact no."
                                                name="contact_no" id="contact_no" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control textarea" placeholder="Message" name="message"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input value="SUBMIT" onclick="return ajaxmailrequest();" class="btn btn-clear"
                                            type="button">
                                        <button class="btn btn-clear blue-btn">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
