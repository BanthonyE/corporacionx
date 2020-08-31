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
    <link rel="icon" href="assets\imgs\favicon.ico" type="image/x-icon">
    <!-- Template CSS -->
    <link href="assets\css\default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets\css\project-2\component.css">

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
                        <h1 class="titlecolor">V2</h1>
                        <img src="assets\imgs\linew.png" alt="">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active">Our Projects V2</li>
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
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-1.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>

                        </div>
                        <div class="portfolio logo" data-cat="logo">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-2.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>

                        </div>
                        <div class="portfolio logo" data-cat="logo">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-3.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-4.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio card" data-cat="card">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-5.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-6.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-7.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-8.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
                        </div>
                        <div class="portfolio app" data-cat="app">
                            <a href="{{ route('project-details') }}" class="tilter tilter--4">
                                <figure class="tilter__figure">
                                    <img class="tilter__image img-fluid" src="assets\imgs\projects\image-9.jpg"
                                        alt="img07">
                                    <div class="tilter__deco tilter__deco--shine">
                                        <div></div>
                                    </div>
                                    <div class="tilter__deco tilter__deco--overlay"></div>
                                    <figcaption class="tilter__caption">
                                        <h3 class="tilter__title">Project Name</h3>
                                        <p class="tilter__description">Description</p>
                                    </figcaption>
                                    <svg class="tilter__deco tilter__deco--lines" viewbox="0 0 300 415">
                                        <path d="M20.5,20.5h260v375h-260V20.5z"></path>
                                    </svg>
                                </figure>
                            </a>
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

    <script src="assets\js\project-2\imagesloaded.pkgd.min.js"></script>
    <script src="assets\js\project-2\anime.min.js"></script>
    <script src="assets\js\project-2\main.js"></script>
    <script src="assets\js\project-2\tilt.js"></script>

</body>
<!-- // Body -->

</html>
<!-- // HTML -->
