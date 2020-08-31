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
                    <h1 class="titlecolor">FAQS</h1>
                    <img src="{!! asset('assets\imgs\linew.png') !!}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">Faq's</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Inner Header -->
<!-- Content Section -->
<div class="content-section services-main">
    <div class="container faq-section"><br>
        <h2 class="text-center text-uppercase">Frequently <span class="orange-txt">Asked</span> Questions</h2>
        <div class="border-creative text-center"><img src="{!! asset('assets\imgs\borders\border.png') !!}" alt=""></div>
        <div class="col-md-8 col-xs-12">
            <div class="accordion-box faq-box">
                <div id="accordion" class="accordion">
                    <div class="card mb-0"> <a class="card-header collapsed " data-toggle="collapse"
                            href="#collapseOne"> <span class="card-title"> Neque porro quisquam est lang erwiesene?
                            </span> </a>
                        <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                            <p>Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein
                                Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger die
                                normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache. Es ist ein
                                lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein Layout
                                ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger die normale
                                Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache </p>
                        </div>
                        <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo"> <span class="card-title"> Qui dolorem ipsum quia dolor von Buchstaben?
                            </span> </a>
                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                            <p>Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein
                                Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger die
                                normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache. Es ist ein
                                lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein Layout
                                ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger die normale
                                Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache </p>
                        </div>
                        <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree"> <span class="card-title"> Consectetur, adipisci velit dass ein Lese?
                            </span> </a>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt
                                wird, wenn er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es
                                mehr oder weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer
                                Sprache. Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn
                                er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder
                                weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache
                            </div>
                        </div>
                        <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                            href="#collapse4"> <span class="card-title"> Consectetur, adipisci velit dass ein Lese?
                            </span> </a>
                        <div id="collapse4" class="collapse" data-parent="#accordion">
                            <div class="card-body">Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt
                                wird, wenn er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es
                                mehr oder weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer
                                Sprache. Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn
                                er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder
                                weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache
                            </div>
                        </div>
                        <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                            href="#collapse5"> <span class="card-title"> Consectetur, adipisci velit dass ein Lese?
                            </span> </a>
                        <div id="collapse5" class="collapse" data-parent="#accordion">
                            <div class="card-body">Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt
                                wird, wenn er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es
                                mehr oder weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer
                                Sprache. Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn
                                er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder
                                weniger die normale Anordnung von Buchstaben darstellt und somit nach lesbarer Sprache
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 ">
            <div class="support">
                <div class="support-content">
                    <h3>Support</h3>
                    <p>Need more support? If you did not found an answer, contact us for further help.</p>
                </div>
            </div>
            <div class="blog-right no-padding">
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
        <div class="clearfix"></div>
    </div>
    <div class="row-2">
        <div class="container">
            <div class="col-xs-12 col-md-6 info left-section bg-blue">
                <div class="page-subheader">
                    <h2>FAQ Categories</h2>
                </div>
                <div class="border"></div>
                <div class="description"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit.</div>
                <ul class="more-questions">
                    <li><a href="">Phasellus vel odio</a></li>
                    <li><a href="">Mauris finibus nunc mi</a></li>
                    <li><a href="">Interdum et malesuada and</a></li>
                    <li><a href="">Pellentesque sit amet nunc</a></li>
                    <li><a href="">Ut fermentum risus in sit</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6 bg-dark info right-section form-sec">
                <div class="page-subheader">
                    <h2>ASK YOUR QUESTION</h2>
                </div>
                <div class="border"></div>
                <div class="description"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur.
                </div>
                <form action="/" method="post" id="faqForm">
                    <div class="form-group no-margin">
                        <div class="controls col-xs-6 no-padding-left">
                            <input class="form-control input" name="name" id="faq_name" placeholder="Name" type="text">
                        </div>
                        <div class="controls col-xs-6 no-padding-right">
                            <input class="form-control input" name="topic" id="faq_topic" placeholder="Topic"
                                type="text">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group no-margin">
                        <div class="controls col-xs-6 no-padding-left">
                            <input class="form-control input" name="country" id="faq_country" placeholder="Your Country"
                                type="text">
                        </div>
                        <div class="controls col-xs-6 no-padding-right">
                            <input class="form-control input" name="email" id="faq_email" placeholder="Email"
                                type="text">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group no-margin">
                        <div class="controls">
                            <textarea class="form-control textarea" name="question" id="faq_question"
                                placeholder="Your Question"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" value="SUBMIT" onclick="return ajaxmailfaq();" class="btn btn-clear">
                        <!--<button class="btn btn-clear">SUBMIT</button>-->
                        <input type="button" value="Reset" onclick="return PageReset();" class="btn btn-clear blue-btn">
                        <!--<button class="btn btn-clear blue-btn" onClick="return PageReset();">Reset</button>-->
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- \\ Content Section -->


@endsection

@section('enlace_footer')


@endsection
