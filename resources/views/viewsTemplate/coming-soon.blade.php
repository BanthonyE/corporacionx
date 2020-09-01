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
    <link rel="icon" href="{{ asset('assets\imgs\favicon.ico') }}" type="image/x-icon">
    <title>Architevo Builder : Construction Services</title>
    <!-- Template CSS -->
    <link href="{{ asset('assets\css\default.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets\js\responsive-slide\responsiveslides.css') }}">
</head>
<!-- //  Head-->

<body>
    <!--header -->
    <div class="coming-soon-logo text-center"><a href="index.html" title=""><img src="{{ asset('assets\imgs\comin-soon\logo.png') }}"
                alt=""></a></div>
    <!-- // header -->
    <!-- Slider Jquery -->
    <div class="responsie-slider">
        <div class="pattern"></div>
        <ul class="rslides" id="slider1">
            <li><img src="{{ asset('assets\imgs\comin-soon\banner-1.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets\imgs\comin-soon\banner-2.jpg') }}" alt=""></li>
            <li><img src="{{ asset('assets\imgs\comin-soon\banner-3.jpg') }}" alt=""></li>
        </ul>
    </div>
    <!-- // Slider Jquery -->
    <!--Caption -->
    <header id="myCarousel" class="carousel carousel-3 comin-soon-carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="item active">
                <div class="carousel-caption raleway">
                    <h2><span>Experts</span> In</h2>
                    <h1>construction <span>services</span></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- // Caption -->
    <!-- Subscribe -->
    <div class="subscribe-coming raleway text-uppercase">
        <h3><span>Subscribe </span>And Be The First To Know</h3>
        <div class="subscribe-form">
            {{-- <form method="post" id="subsMiddleForm" onsubmit="return ajaxmailmiddlesubscribe();"> --}}
            <form method="post" id="subsMiddleForm" onsubmit="">
                <input type="email" class="coming-input" name="subsmiddleemail" id="subsmiddleemail"
                    placeholder="Enter your Email Address">
                {{-- <input type="button" class="coming-input montserrat" value="SUBSCRIBE NOW" onclick="return ajaxmailmiddlesubscribe();"> --}}
                <input type="button" class="coming-input montserrat" value="SUBSCRIBE NOW" onclick="">
            </form>
        </div>
    </div>
    <!-- // Subscribe -->
    <!-- Counter -->
    <div class="counter-area">
        <div class="container">
            <p class="montserrat website text-uppercase"><strong>Website</strong> will be launch in</p>
            <ul id="back-countdiown">
                <li> <span class="days">00</span>
                    <p class="raleway">days</p>
                </li>
                <li> <span class="hours">00</span>
                    <p class="raleway">hours </p>
                </li>
                <li> <span class="minutes">00</span>
                    <p class="raleway">minutes</p>
                </li>
                <li> <span class="seconds">00</span>
                    <p class="raleway">seconds</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- // Counter -->
    <!-- Footer -->
    <div class="comin-soon-copyright">
        <div class="coming-social">

            <a href="https://www.facebook.com/srgit/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/srgit" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://srgit.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a>
            <a href="https://www.instagram.com/srgit/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/srgit" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://plus.google.com/u/0/111241896454295946416" target="_blank"><i
                    class="fa fa-google-plus"></i></a>
            <a href="https://in.pinterest.com/srgit/" target="_blank"><i class="fa fa-pinterest"></i></a>

        </div>
        <p>© Copyright All Rights Reserved | Designed by: <a href="http://www.srgit.com/">SRGIT</a>



        </p>
    </div>
    <!-- // Footer -->
    <!-- Form Submission Popup -->
    <p data-toggle="modal" class="no-margin" data-target="#myModal" id="model2"></p>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body"> <br>
                    <br>
                    <h3 class="modal-title">Thank You</h3>
                    <h4>We will get back to you as soon as possible.</h4>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- \\ Form Submission Popup -->
    <!-- Jquery Section  -->
    <!-- Form Script -->
    <script src="{{ asset('assets\js\ajax.js') }}"></script>
    <script src="{{ asset('assets\js\formValidation.js') }}"></script>
    <!-- Javascript Library -->
    <script src="{{ asset('assets\js\coming-soon\js\jquery-2.2.4.min.js') }}"></script>
    <!-- background Slider -->
    <script src="{{ asset('assets\js\responsive-slide\responsiveslides.min.js') }}"></script>
    <script src="{{ asset('assets\js\responsive-slide\rr-slides.js') }}"></script>
    <!-- Countdown -->
    <script src="{{ asset('assets\js\coming-soon\js\coundown-timer.js') }}"></script>
    <script src="{{ asset('assets\js\coming-soon\js\scripts.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets\js\bootstrap.min.js') }}"></script>
</body>
<!-- // Body -->

</html>
<!-- // HTML -->
