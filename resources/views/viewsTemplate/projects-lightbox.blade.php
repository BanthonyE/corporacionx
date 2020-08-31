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
    <link rel="icon" href="{!! asset('assets\imgs\favicon.ico') !!}" type="image/x-icon">
    <!-- Template CSS -->
    <link href="{!! asset('assets\css\default.css') !!}" rel="stylesheet">

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
                        <h1>Our Projects</h1>
                        <h1 class="titlecolor">Lightbox</h1>
                        <img src="assets\imgs\linew.png" alt="">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active">Our Projects Lightbox</li>
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
            <div class="border-creative text-center"><img src="assets\imgs\borders\border.png" alt=""></div>
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
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-1.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-1.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="portfolio logo" data-cat="logo">

                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-2.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-2.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio logo" data-cat="logo">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-3.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-3.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-4.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-4.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-5.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-5.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-6.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-6.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-7.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-7.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-8.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-8.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <div class="prtfl-bx text-center">
                                <img src="assets\imgs\projects\image-9.jpg" alt="prtfl-img1-1.jpg">
                                <div class="prtfl-inf">
                                    <div class="prtfl-inf-btns">
                                        <a data-fancybox="gallery" href="assets\imgs\projects\image-9.jpg" title=""><i
                                                class="fa fa-search"></i></a>
                                        <a href="{{ route('project-details') }}" title=""><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/embed/tDvBwPzJ7dY" data-fancybox="" title=""><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                    <h4><a href="{{ route('project-details') }}" title="" class="text-light">Project Name</a></h4>
                                    <div class="prtfl-cat">
                                        <a href="#" title="">Product Mockup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
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
    <!--   Iframe video -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog video-modal">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="100%" height="500" src="https://www.youtube.com/embed/YPqIBIHrHkc"
                        frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- \\Iframe video -->

    <!-- Jquery Section  -->
    <!-- Form Script -->
    <script src="assets\js\ajax.js"></script>
    <script src="assets\js\formValidation.js"></script>
    <!--  Javascript Library -->
    <script src="assets\js\jquery-2.2.4.min.js"></script>
    <script src="assets\js\jquery.mixitup.min.js"></script>
    <!-- Bootstrap v4.1.3 JavaScript -->
    <script src="assets\js\bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="assets\js\owlcarousel\owl.carousel.staff.js"></script>
    <!-- Custom JS -->
    <script src="assets\js\custom-projects.js"></script>
    <!-- Fixed Header -->
    <script src="assets\js\classie.js"></script>
    <script src="assets\js\cbpAnimatedHeader.js"></script>

    <link rel="stylesheet" href="assets\js\fancybox\jquery.fancybox.min.css">
    <script src="assets\js\fancybox\jquery.fancybox.min.js"></script>


</body>
<!-- // Body -->

</html>
<!-- // HTML -->
