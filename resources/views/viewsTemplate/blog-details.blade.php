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
                    <h1>Blog</h1>
                    <h1 class="titlecolor">page</h1>
                    <img src="{{ asset('assets\imgs\linew.png') }}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">Blog Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section about-page-section blog-bg">
    <div class="container">

        <div class="col-lg-8 col-md-12">
            <div class="blog-in">
                <h1 class="montserrat">Neque porro quisquam est qui dolorem</h1>
                <ul class="comm-date">
                    <li> March 31, 2020 </li>
                    <li>|</li>
                    <li> <span>by Admin</span> </li>
                    <li>|</li>
                    <li>No Comments</li>
                </ul>
                <div class="img-cont"><img src="{{ asset('assets\imgs\blog-images\blog-1.jpg') }}" alt="" title="" class="img-fluid">
                </div>
                <div class="blog-text">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber
                        tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                        facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit.</p>
                    <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam
                        littera gothica, quam nunc putamus parum claram. Duis autem vel eum iriure dolor in hendrerit in
                        vulputate velit esse molestie consequat.</p>
                    <div class="clearfix"></div>
                    <div class="row m-0">
                        <div class="col-lg-5 col-md-5 no-padding-left padd-0 text-center"><img
                                src="{{ asset('assets\imgs\blog-images\blog-in.jpg') }}" class="img-fluid mt-15" alt=""> </div>
                        <div class="col-lg-7 col-md-7 padd-0">
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla
                                facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                                doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
                                est usus legentis in iis qui facit.</p>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat
                        nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber
                        tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                        facer possim assum.</p>
                </div>
                <div class="pull-left text-uppercase"> <a href="{{ route('blog-details') }}"
                        class="right-tags montserrat">Home</a> <a href="{{ route('blog-details') }}"
                        class="right-tags montserrat">Repair</a> <a href="{{ route('blog-details') }}"
                        class="right-tags montserrat">Service</a> <a href="{{ route('blog-details') }}"
                        class="right-tags montserrat">Construction</a> </div>
                <div class="pull-right">
                    <div class="share2 montserrat">
                        <h4>SHARE </h4>
                        <a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a> <a href="#"
                            class="icoInsta" title="Instagram"><i class="fa fa-instagram"></i></a> <a href="#"
                            class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a> <a href="#"
                            class="icoGoogle" title="pinterest+"><i class="fa fa-pinterest"></i></a> <a href="#"
                            class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr class="pro-hr">
                <div class="comment-section">
                    <div class="dp-container"><img src="{{ asset('assets\imgs\clients\client-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="main-comment">
                        <h4>Selina Kyle <span>8 April, 2020 at 9:00 am</span></h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu
                            feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit
                            praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                            quo.</p>
                        <button data-toggle="collapse" data-target="#reply-one">Reply</button>
                    </div>
                    <div class="clearfix"></div>
                    <div id="reply-one" class="collapse reply-form">
                        <form action="/" method="post" id="blogForm">
                            <h3>Reply to the Comment</h3>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" class="form-group name-input" placeholder="Name" name="name"
                                        id="name">
                                </div>
                                <div class="col-xs-6 no-padding-left">
                                    <input type="email" class="form-group name-input" placeholder="Email" name="email"
                                        id="email">
                                </div>
                                <div class="col-xs-12">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    {{-- <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="return ajaxmailblog();"> --}}
                                    <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="">
                                    <!--<a href="{{ route('blog-details') }}" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>-->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="pro-hr">
                <div class="comment-section">
                    <div class="dp-container"><img src="{{ asset('assets\imgs\clients\client-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="main-comment">
                        <h4>Chris Wayne <span>8 April, 2020 at 9:00 am</span></h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu
                            feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit
                            praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id
                            quo.</p>
                        <button data-toggle="collapse" data-target="#reply-two">Reply</button>
                    </div>
                    <div class="clearfix"></div>
                    <div id="reply-two" class="collapse reply-form">
                        <form action="/" method="post" id="blogForm">
                            <h3>Reply to the Comment</h3>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" class="form-group name-input" placeholder="Name" name="name"
                                        id="name">
                                </div>
                                <div class="col-xs-6 no-padding-left">
                                    <input type="email" class="form-group name-input" placeholder="Email" name="email"
                                        id="email">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    {{-- <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="return ajaxmailblog();"> --}}
                                    <input type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="">
                                    <!--<a href="{{ route('blog-details') }}" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>
-->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="pro-hr">
                <div class="comment-section">
                    <div class="clearfix"></div>
                    <div class="reply-form no-margin no-background no-border no-padding">
                        <form action="/" method="post" id="blogCommentForm">
                            <h3>Leave the comment</h3>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" name="comment_name" id="comment_name"
                                        class="form-group name-input" placeholder="Name">
                                </div>
                                <div class="col-xs-6 no-padding-left">
                                    <input type="text" name="comment_email" id="comment_email"
                                        class="form-group name-input" placeholder="Email">
                                </div>
                                <div class="col-xs-12">
                                    <textarea name="comment_message" id="comment_message"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-xs-12">
                                    {{-- <button type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="return ajaxmailcommentblog();">SUBMIT <i class="fa fa-long-arrow-right" --}}
                                    <button type="button" class="continue montserrat" value="SUBMIT" name="submitt" onclick="">SUBMIT <i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>

                                    <!--<a href="{{ route('blog-details') }}" class="continue montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>-->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="">
                <div class="blog-right search-blog">
                    <h1>Search</h1>
                    <div class="border-orange"></div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search your Topic">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <br>
                <div class="blog-right-2 padding-left-15">
                    <div class="blog-right">
                        <h1>ARCHIVES</h1>
                        <div class="border-orange"></div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cat-list">
                                    <ul>
                                        <li><a href="#">April 2020</a></li>
                                        <li><a href="#">March 2020</a></li>
                                        <li><a href="#">February 2020</a></li>
                                        <li><a href="#">January 2020</a></li>
                                        <li><a href="#">December 2016</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <div class="blog-right">
                        <h1>POPULAR POSTS</h1>
                        <div class="border-orange"></div>
                        <div class="clearfix"></div>
                        <div class="">
                            <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="{{ asset('assets\imgs\blog-images\a.jpg') }}"
                                    class="img-fluid" alt=""> </div>
                            <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="{{ route('blog-details') }}">
                                    <h4>Neque porro quisquam est qui dolorem</h4>
                                </a>
                                <p>March 31, 2020</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="{{ asset('assets\imgs\blog-images\b.jpg') }}"
                                    class="img-fluid" alt=""> </div>
                            <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="{{ route('blog-details') }}">
                                    <h4>Neque porro quisquam est qui dolorem</h4>
                                </a>
                                <p>March 31, 2020</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-5 col-sm-4 col-xs-4 no-padding"> <img src="{{ asset('assets\imgs\blog-images\c.jpg') }}"
                                    class="img-fluid" alt=""> </div>
                            <div class="col-md-7 col-sm-8 col-xs-8 no-padding-right"> <a href="{{ route('blog-details') }}">
                                    <h4>Neque porro quisquam est qui dolorem</h4>
                                </a>
                                <p>March 31, 2020</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-right-2">
                    <div class="blog-right">
                        <h1>Categories</h1>
                        <div class="border-orange"></div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cat-list">
                                    <ul>
                                        <li><a href="#">Contracting</a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li><a href="#">Repairement</a></li>
                                        <li><a href="#">Home Making</a></li>
                                        <li><a href="#">Other services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <div class="blog-right tags-div">
                        <h1>Popular tags</h1>
                        <div class="border-orange"></div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tag-list">
                                    <ul>
                                        <li><a href="#">Contracting</a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li><a href="#">Repair</a></li>
                                        <li><a href="#">Repair</a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li><a href="#">Contracting</a></li>
                                        <li><a href="#">Contracting</a></li>
                                        <li><a href="#">Construction</a></li>
                                        <li><a href="#">Repair</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--\\ Content Section -->



@endsection

@section('enlace_footer')


@endsection
