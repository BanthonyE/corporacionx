@section('title')
@extends('layout')

@section('contenido')



<!-- Inner Header -->
<div class="inner-header">
    <div class="pattern"></div>
    <div class="display-cell">
        <div class="container">
            <div class="col-xs-12 text-left">
                <div class="home-builder-page-title">
                    <h1>About</h1>
                    <h1 class="titlecolor">Us</h1>
                    <img src="{{ asset('assets\imgs\linew.png') }}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">About Us</li>
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
        <h2 class="text-center text-uppercase">Who <span class="orange-txt">WE</span> are</h2>
        <div class="border-creative text-center"><img src="{{ asset('assets\imgs\borders\border.png') }}" alt=""></div>
        <div class="col-lg-6 col-md-12">
            <div class="img-container"> <img src="{{ asset('assets\imgs\about\about.jpg') }}" class="img-fluid" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 no-padding">
            <ul class="about-sec-time no-padding no-margin">
                <li class="display-cell text-center"> <i class="fa fa-clock-o" aria-hidden="true"></i> <span
                        class="clearfix"> </span> <span class="montserrat">Working hours</span> </li>
                <li class="display-cell text-center"> Every Day<br>
                    <span class="orange-txt">7am - 12am</span> </li>
                <li class="display-cell text-center"> Every Day<br>
                    <span class="orange-txt">7am - 12am</span> </li>
                <li class="display-cell text-center"> Every Day<br>
                    <span class="orange-txt">7am - 12am</span> </li>
            </ul>
            <div class="two-imgs">
                <div class="col-xs-6 no-padding-left"><img src="{{ asset('assets\imgs\misc-images\2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xs-6 no-padding-right"><img src="{{ asset('assets\imgs\misc-images\1.jpg') }}" class="img-fluid"
                        alt=""></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--\\ Content Section -->
<!-- what we do -->
<div class="content-section about-what-we-do">
    <div class="container">
        <h2 class="text-uppercase">what <span class="orange-txt">WE</span> do</h2>
        <div class="border-creative"><img src="{{ asset('assets\imgs\borders\border-3.png') }}" alt=""></div>
        <div class="col-lg-12">
            <div class="row">
                <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text </p>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\icon-1.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Safe Work</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\icon-2.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Good Planning</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\icon-3.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Professionals</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\icon-4.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Brilliant Ideas</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\commercial.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Commercial</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services-icons">
                            <div class="col-xs-2 no-padding"><img src="{{ asset('assets\imgs\icons\school.png') }}" alt=""
                                    class="img-fluid"></div>
                            <div class="col-xs-10">
                                <h4>Government</h4>
                                <p>Eiusmod tempor incididunt ut labore et dolore Ut
                                    enim ad minim veniam quis</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--// what we do-->
<!--staff -->
<div class="content-section light-bg staff-section">
    <div class="container">
        <h2 class="text-center text-uppercase">Our Expert <span class="orange-txt">Staff</span></h2>
        <div class="border-creative text-center"><img src="{{ asset('assets\imgs\borders\border.png') }}" alt=""></div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-4.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Brown</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-1.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>John Anderson</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-2.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Maria Smith</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-3.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Lee</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-4.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Brown</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-1.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>John Anderson</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-2.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Maria Smith</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-3.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Lee</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-4.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Brown</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-1.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>John Anderson</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-2.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Maria Smith</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-3.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Lee</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-4.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Brown</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-1.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>John Anderson</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-2.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Maria Smith</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="">
                    <div class="hexagon hexagon1">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background:url(assets/imgs/staff/staff-3.png) no-repeat;">
                            </div>
                        </div>
                    </div>
                    <div class="staff-desc text-center">
                        <h5>Jim Lee</h5>
                        <p>Senior Product Officer</p>
                        <div class="bottom-staff">
                            <ul class="no-margin no-padding">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- /col -->
    </div>
</div>
<!--\\ staff -->



@endsection

@section('enlace_footer')


@endsection
