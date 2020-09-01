<!DOCTYPE html>
<html lang="en">
<!-- Head-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Architevo Builder : Construction Services</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets\imgs\favicon.ico') }}" type="image/x-icon">
    <!-- Template CSS -->
    <link href="{{ asset('assets\css\default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\js\video\style.css') }}" rel="stylesheet">
</head>
<!-- //  Head-->

<body>

    @include('partials/header')
    <!-- Inner Header -->
    <div class="inner-header">
        <div class="pattern"></div>
        <div class="display-cell">
            <div class="container">
                <div class="col-xs-12 text-left">
                    <div class="home-builder-page-title">
                        <h1>Our</h1>
                        <h1 class="titlecolor">Projects</h1>
                        <img src="{{ asset('assets\imgs\linew.png') }}" alt="">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active">Our Projects</li>
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
            <h2 class="text-center text-uppercase">Our <span class="orange-txt">Latest Portfolio</span></h2>
            <div class="border-creative text-center"><img src="{{ asset('assets\imgs\borders\border.png') }}" alt=""></div>
            <div class="">
                <ul id="filters" class="clearfix montserrat">
                    <li><span class="filter " data-filter=".app, .card, .icon, .logo, .web">All</span></li>
                    <li><span class="filter" data-filter=".app">Construction</span></li>
                    <li><span class="filter" data-filter=".card">Machines </span></li>
                    <li><span class="filter" data-filter=".icon">Home Making</span></li>
                    <li><span class="filter" data-filter=".logo">movers</span></li>
                    <li><span class="filter" data-filter=".web">Repairing</span></li>
                </ul>
                <!--/#portfolio-filter-->
                <div class="">
                    <div id="portfoliolist">
                        <div class="portfolio logo" data-cat="logo">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item1.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio logo" data-cat="logo">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item2.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio logo" data-cat="logo">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item3.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio card" data-cat="card">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item4.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio card" data-cat="card">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item5.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio app" data-cat="app">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item6.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio app" data-cat="app">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item1.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio app" data-cat="app">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item2.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
                        <div class="portfolio app" data-cat="app">
                            <div class="grid-2">
                                <figure class="effect-jazz"> <img src="{{ asset('assets\imgs\portfolio\recent\item3.png') }}"
                                        class="img-fluid" alt="img25">
                                    <figcaption>
                                        <h2><i class="fa fa-search" aria-hidden="true">&nbsp;</i></h2>
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
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="video-wrapper text-center" style="overflow:hidden; height:300px; background:none">
            <div class="pattern"></div>
            <div id="background-video" class="background-video"> <img src="{{ asset('assets\js\video\placeholder.jpg') }}" alt=""
                    class="placeholder-image"> </div>
            <div class="player-container montserrat text-uppercase">
                <h3>watch US IN ACTION</h3>
            </div>
        </div>
    </div>
    <!--\\ Content Section -->

    @include('partials/footer')

    <!-- Jquery Section  -->
<!-- Form Script -->
<script src="{{asset('assets/js/ajax.js')}}"></script>
<script src="{{asset('assets/js/formValidation.js')}}"></script>
<!--  Javascript Library -->
<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
<script  src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
<!-- Bootstrap v4.1.3 JavaScript -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/js/owlcarousel/owl.carousel.staff.js')}}"></script>
<!-- Scroll to Top -->
<script  src="{{asset('assets/js/scrolltopcontrol.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('assets/js/custom-projects.js')}}"></script>
<!-- Fixed Header -->
<script src="{{asset('assets/js/classie.js')}}"></script>
<script src="{{asset('assets/js/cbpAnimatedHeader.js')}}"></script>
<script src="{{asset('assets/js/video/jquery.youtubebackground.js')}}"></script>
<script>
    jQuery(function($) {

      
      $('#background-video').YTPlayer({
        fitToBackground: true,
        videoId: 'YPqIBIHrHkc',
        pauseOnScroll: true,
        callback: function() {
          videoCallbackEvents();
        }
      });
      
      var videoCallbackEvents = function() {
        var player = $('#background-video').data('ytPlayer').player;
      
        player.addEventListener('onStateChange', function(event){
            console.log("Player State Change", event);

            // OnStateChange Data
            if (event.data === 0) {          
                console.log('video ended');
            }
            else if (event.data === 2) {          
              console.log('paused');
            }
        });
      }
    });
  </script>
</body>
<!-- // Body -->
</html>
<!-- // HTML -->