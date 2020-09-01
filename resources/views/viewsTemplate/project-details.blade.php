<!DOCTYPE html>
<html lang="en">
<!-- Head-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets\imgs\favicon.ico')}}" type="image/x-icon">
    <title>Architevo Builder : Construction Services</title>
    <!-- Template CSS -->
    <link href="{{asset('assets\css\default.css')}}" rel="stylesheet">
</head>
<!-- //  Head-->

@include('partials/header')

<!-- Inner Header -->
<div class="inner-header">
    <div class="pattern"></div>
    <div class="display-cell">
        <div class="container">
            <div class="col-xs-12 text-left">
                <div class="home-builder-page-title">
                    <h1>Project</h1>
                    <h1 class="titlecolor">Details</h1>
                    <img src="{{asset('assets\imgs\linew.png')}}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">Project Details </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section about-page-section">
    <div class="container">
        <h2 class="text-center text-uppercase">Project <span class="orange-txt">Details</span></h2>
        <div class="border-creative text-center"><img src="{{asset('assets\imgs\borders\border.png')}}" alt=""></div>
        <div class="project-details">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequatLorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</p>
                    <ul class="no-margin no-padding">
                        <li><span class="orange-txt"><i class="fa fa-calendar" aria-hidden="true"></i> Date :</span>
                            April 15, 2020 </li>
                        <li><span class="orange-txt"><i class="fa fa-user" aria-hidden="true"></i> Client :</span>
                            Harrison Group, Texas </li>
                        <li><span class="orange-txt"><i class="fa fa-list" aria-hidden="true"></i> Category :</span>
                            Construction, Home</li>
                        <li><span class="orange-txt"><i class="fa fa-bar-chart" aria-hidden="true"></i> Net Worth
                                :</span> US $29.9</li>
                        <li> <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> </a> <a
                                href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> </a> <a
                                href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="amazingslider-wrapper-1" class="project-slider"
                        style="display:block;position:relative;max-width:100%;margin:0px 0 93px;">
                        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;width:100%;">
                            <ul class="amazingslider-slides" style="display:none;">
                                <li><img src="{{asset('assets\imgs\blog-images\a.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\blog-images\b.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\blog-images\c.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\d.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\blog-images\a.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\blog-images\b.jpg')}}"> </li>
                                <li><img src="{{asset('assets\imgs\blog-images\c.jpg')}}"> </li>
                            </ul>
                            <ul class="amazingslider-thumbnails" style="display:none;">
                                <li><img src="{{asset('assets\imgs\blog-images\a.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\blog-images\b.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\blog-images\c.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\d.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\blog-images\a.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\blog-images\b.jpg')}}"></li>
                                <li><img src="{{asset('assets\imgs\blog-images\c.jpg')}}"></li>
                            </ul>
                            <div class="amazingslider-engine"><a href="http://amazingslider.com"
                                    title="Responsive Slider jQuery">Responsive Slider jQuery</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <hr>
        <h2 class="text-center text-uppercase font-second-head">Related <span class="orange-txt">Projects</span>
        </h2>
        <div class="border-creative text-center"><img src="{{asset('assets\imgs\borders\border.png')}}" alt=""></div>
        <div class="row other-row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item3.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item1.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item2.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item4.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item3.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item1.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item2.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio">
                        <div class="grid-2">
                            <figure class="effect-jazz"> <img src="{{asset('assets\imgs\portfolio\recent\item4.png')}}"
                                    class="img-fluid" alt="img25">
                                <figcaption>
                                    <h2><i class="fa fa-search" aria-hidden="true"></i></h2>
                                    <a href="{{ route('project-details') }}" title="Project Details">View more</a>
                                </figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2>Vehicula Eusimod Mollis</h2>
                            </div>
                            <div class="tags"><a href="#">Construction</a>, <a href="#">Home Making</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="video-wrapper text-center">
        <div class="pattern"></div>
        <div class="player-container montserrat text-uppercase"> <a href="#myModal" data-toggle="modal"><span><i
                        class="fa fa-play" aria-hidden="true"></i></span>
                <h3>watch US IN ACTION</h3>
            </a> </div>
    </div>
</div>
<!--\\ Content Section -->
@include('partials/footer')
<!-- Jquery Section  -->
<!-- Form Script -->
<script src="{{asset('assets\js\ajax.js')}}"></script>
<script src="{{asset('assets\js\formValidation.js')}}"></script>
<!-- JavaScript Library-->
<script src="{{asset('assets\js\jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets\js\jquery.mixitup.min.js')}}"></script>
<!-- Bootstrap v4.1.3 JavaScript -->
<script src="{{asset('assets\js\bootstrap.min.js')}}"></script>
<!-- Amazing Slider -->
<script src="{{asset('assets\js\amazing-slider-plugin\thumb-slider\thumb-slider-jquery.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('assets\js\amazing-slider-plugin\thumb-slider\thumb-slider.css')}}">
<script src="{{asset('assets\js\amazing-slider-plugin\thumb-slider\thumb-slider.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets\js\owlcarousel\owl.carousel.staff.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets\js\custom-projects.js')}}"></script>
<!-- Fixed header -->
<script src="{{asset('assets\js\classie.js')}}"></script>
<script src="{{asset('assets\js\cbpAnimatedHeader.js')}}"></script>
</body>
<!-- // Body -->

</html>
<!-- // HTML -->
