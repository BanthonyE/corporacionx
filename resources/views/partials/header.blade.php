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
    <link rel="icon" href="assets\imgs\favicon.ico" type="image/x-icon">
    <title>Architevo Builder : Construction Services</title>
    <!-- Template CSS -->
    <link href="assets\css\default.css" rel="stylesheet">
</head>
<!-- //  Head-->

<body>
    <!--header -->
    <div class="top-header">
        <div class="container">
            <div class="pull-left"><a href="{{route('index')}}" title="Home"><img src="assets\imgs\logo.png" class="logo1"
                        title="" alt=""> </a></div>
            <div class="pull-right">
                <div class="top-menu">
                    <ul>
                        <li><a href="{{ route('support') }}">Support</a></li>
                        <li class="saperator">|</li>
                        <li><a href="{{ route('privacy') }}">Privacy</a></li>
                        <li class="saperator">|</li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li class="saperator">|</li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="top-search-div">
                    <div class="top-social">
                        <ul>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="https://www.facebook.com/srgit/" title=""
                                        target="_blank"><i class="fa fa-facebook"></i></a></div>
                            </li>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="https://twitter.com/srgit" title=""
                                        target="_blank"><i class="fa fa-twitter"></i></a></div>
                            </li>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="http://srgit.tumblr.com/" title=""
                                        target="_blank"><i class="fa fa-tumblr"></i></a></div>
                            </li>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="https://www.linkedin.com/company/srgit"
                                        title="" target="_blank"><i class="fa fa-linkedin"></i></a></div>
                            </li>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="https://www.instagram.com/srgit/" title=""
                                        target="_blank"><i class="fa fa-instagram"></i></a></div>
                            </li>
                            <li>
                                <div class="hvr-sweep-to-right"><a href="https://in.pinterest.com/srgit/" title=""
                                        target="_blank"><i class="fa fa-pinterest"></i></a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-search top-s">
                        <input type="text" placeholder="Search">
                        <input type="submit" class="search" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--\\ header -->
    <!-- Navigation -->
    <nav class="navbar fixed-top  navbar-default navbar-custom">
        <div class="parallelogram-container">
            <div class="parallelogram"></div>
        </div>
        <div class="container">
            <div class="container-fluid no-padding">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <div class="top-search-div search-div search-div-2">
                        <div class="top-search top-search-2">
                            <input type="text" placeholder="Search">
                            <input type="submit" class="search" value="">
                        </div>
                    </div>
                    <div class="pull-left fixed-menu-logo-2"><a href="{{route('index')}}" title="Home"><img
                                src="assets\imgs\responsive-logo-2.png" alt=""></a> </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <i
                            class="fa fa-bars"></i></button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="pull-left fixed-menu-logo"><a href="{{ route('index') }}" title="Home"><img
                                src="assets\imgs\responsive-logo.png" alt=""></a> </div>
                    <nav class="navbar navbar-expand-sm navbar-left">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> Home </a>
                                <div class="dropdown-menu"> <a href="{{ route('index') }}" class="dropdown-item">Home v1</a>
                                    <a href="{{ route('index-2') }}" class="dropdown-item">Home v2</a>
                                    <a href="{{ route('index-3') }}" class="dropdown-item">Home v3</a> <a
                                        href="../template-onepage/index.html" class="dropdown-item">Home One Page</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown active"> <a class="nav-link dropdown-toggle"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false"> About </a>
                                <div class="dropdown-menu"> <a href="{{ route('about') }}" class="nav-link">About Us</a> <a
                                        href="{{ route('about-2') }}" class="nav-link">About Us V2</a> </div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> Services </a>
                                <div class="dropdown-menu"> <a href="{{ route('services') }}" class="dropdown-item">Services</a>
                                    <a href="{{ route('services-2') }}" class="dropdown-item">Services V2</a> <a
                                        href="{{ route('service-details') }}" class="dropdown-item">Services Details</a> </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false"> Projects </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('projects') }}">Projects</a>
                                    <a class="dropdown-item" href="{{ route('projects-2') }}">Projects V2</a>
                                    <a class="dropdown-item" href="{{ route('projects-lightbox') }}">Projects Lighbox</a>
                                    <a class="dropdown-item" href="{{ route('projects-lightbox-description') }}">Projects Lighbox
                                        Description</a>
                                    <a class="dropdown-item" href="{{ route('project-details') }}">Projects Details</a> </div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> Pages </a>
                                <div class="dropdown-menu"> <a href="{{ route('coming-soon') }}" class="dropdown-item">Coming
                                        Soon</a> <a href="{{ route('page-not-found') }}" class="dropdown-item">Page Not Found</a>
                                    <a href="{{ route('faq') }}" class="dropdown-item">FAQ</a> <a href="{{ route('privacy') }}"
                                        class="dropdown-item">Privacy</a> <a href="{{ route('support') }}"
                                        class="dropdown-item">Support</a> </div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> Blog </a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a> <a
                                        class="dropdown-item" href="{{ route('blogs-grid-1') }}">Blogs Grid</a> <a
                                        class="dropdown-item" href="{{ route('blogs-grid-2') }}">Blogs Grid V2</a> <a
                                        class="dropdown-item" href="{{ route('blogs-3') }}">Blogs Left Sidebar</a> <a
                                        class="dropdown-item" href="{{ route('blog-details') }}">Blog Details</a> <a
                                        class="dropdown-item" href="{{ route('blog-details-2') }}">Blog Details Left Sidebar</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false"> Contact Us </a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('contact') }}">Contact Us
                                        1</a> <a class="dropdown-item" href="{{ route('contact-2') }}">Contact Us 2</a> </div>
                            </li>
                            <li class="on-mob"><a href="services.html#quote-now">Quote Now</a></li>
                        </ul>
                    </nav>
                    <div class="pull-right quote-now"> <a href="" data-toggle="modal" data-target="#myModal3">Quote Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
    <!--\\ Navigation -->



    <div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
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
                            <div class="border"></div>
                            <div class="description">
                                <p> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                            </div>
                            <form action="/" method="post" id="requestForm">
                                <div class="form-group no-margin">
                                    <div class="controls col-xs-6 no-padding-left">
                                        <input class="form-control input" placeholder="Name" name="name" id="name"
                                            type="text">
                                    </div>
                                    <div class="controls col-xs-6 no-padding-right">
                                        <input class="form-control input" placeholder="Email" name="email" id="email"
                                            type="text">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group no-margin">
                                    <div class="controls col-xs-6 no-padding-left">
                                        <input class="form-control input" placeholder="Service Type" name="service_type"
                                            id="service_type" type="text">
                                    </div>
                                    <div class="controls col-xs-6 no-padding-right">
                                        <input class="form-control input" placeholder="Contact no." name="contact_no"
                                            id="contact_no" type="text">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group no-margin">
                                    <div class="controls">
                                        <textarea class="form-control textarea" placeholder="Message" name="message"
                                            id="message"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input value="SUBMIT" onclick="return ajaxmailrequest();" class="btn btn-clear"
                                        type="button">
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
