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
                    <h1>Our</h1>
                    <h1 class="titlecolor">Services</h1>
                    <img src="{!! asset('assets\imgs\linew.png') !!}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section services-main">
    <div class="container">
        <h2 class="text-center text-uppercase">Construction <span class="orange-txt">SERVICES</span></h2>
        <div class="border-creative text-center"><img src="{!! asset('assets\imgs\borders\border.png') !!}" alt=""></div>
        <div class="row">
            <div class="grid-2">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab-2.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab-3.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab-4.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab-5.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure class="effect-jazz"> <img src="{!! asset('assets\imgs\tab\tab-6.jpg') !!}" class="img-fluid" alt="img25">
                        <figcaption>
                            <h2><span>Service</span> Name</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                            </p>
                            <a href="{{ route('service-details') }}">View more</a>
                        </figcaption>
                    </figure>
                    <a href="{{ route('service-details') }}" class="view-detail montserrat">VIEW DETAIL <i
                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row-2 pos-relative"> <span class="hotspot quote-hotspot" id="quote-now"></span>
        <div class="container">
            <div class="col-lg-6 col-md-12 info left-section bg-blue">
                <div class="page-subheader">
                    <h2>We're here to help you</h2>
                </div>
                <div class="border"></div>
                <div class="description"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor.</div>
                <div class="call-on">
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-2 no-padding-left"><span class="round-border"><i
                                    class="icon-flat flaticon-phone-call"></i></span></div>
                        <div class="col-xs-9">
                            <p>Call us on<br>
                                800-343-3548</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-2 no-padding-left"><span class="round-border"><i
                                    class="icon-flat flaticon-speech-bubble"></i></span></div>
                        <div class="col-xs-9">
                            <p>Chat with a representative<br>
                                &nbsp;</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-2 no-padding-left"><span class="round-border"><i
                                    class="icon-flat flaticon-placeholder"></i></span></div>
                        <div class="col-xs-9">
                            <p>Find our regional
                                office near you</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <div class="col-xs-2 no-padding-left"><span class="round-border"><i
                                    class="icon-flat flaticon-support"></i></span></div>
                        <div class="col-xs-9">
                            <p>Online Counselling<br>
                                &nbsp;</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="sm-block address-3">
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 bg-dark info right-section form-sec">
                <div class="page-subheader">
                    <h2>request a quote</h2>
                </div>
                <div class="border"></div>
                <div class="description"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.
                </div>
                <form action="/" method="post">
                    <div class="form-group no-margin">
                        <div class="controls col-xs-6 no-padding-left">
                            <input class="form-control input" placeholder="Name" name="name" type="text">
                        </div>
                        <div class="controls col-xs-6 no-padding-right">
                            <input class="form-control input" placeholder="Email" name="email" type="text">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group no-margin">
                        <div class="controls col-xs-6 no-padding-left">
                            <input class="form-control input" placeholder="Service Type" name="service_type"
                                type="text">
                        </div>
                        <div class="controls col-xs-6 no-padding-right">
                            <input class="form-control input" placeholder="Contact no." name="contact_no" type="text">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group no-margin">
                        <div class="controls">
                            <textarea class="form-control textarea" rows="5" placeholder="Message"
                                name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" value="SUBMIT" onclick="return ajaxmailrequest();" class="btn btn-clear">
                        <!--<button class="btn btn-clear">SUBMIT</button>-->
                        {{-- <button class="btn btn-clear blue-btn" value="submit">Reset</button> --}}
                        <a href="#" class="btn btn-clear blue-btn" >Reset</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--\\ Content Section -->

@endsection

@section('enlace_footer')


@endsection
