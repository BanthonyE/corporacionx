<!-- footer-logos -->

<div class="footer-logos content-section footer-logos-custom">
    <div class="container">
        <h2 class="text-center text-uppercase">Our <span class="orange-txt">Clients</span></h2>
        <div class="border-creative text-center"><img src="assets\imgs\borders\border.png" alt=""></div>
        <p class="clients-para">Our Clients are super important for our well being</p>
        <div id="owl-demo" class="owl-carousel">
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo1.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo2.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo3.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo4.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo5.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo1.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo2.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo3.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo4.png') }}" alt=""></div>
            <div class="item"><img src="{{ asset('assets\imgs\logo-carousel\logo5.png') }}" alt=""></div>
        </div>
    </div>
</div>
<!-- \\footer-logos -->
<!-- footer -->
<div class="footer">
    <div class="newsletter wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms">
        <div class="container">
            <div class="col-xs-6 address">
                <div class="col-xs-2"><i class="flaticon-placeholder"></i></div>
                <div class="nws-txt no-padding">
                    <h5>Location : </h5>
                    <p>385 "Shubham" New Adarsh Colony near MR4 road,<br>
                        Jabalpur, (MP)</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-6 phone-div">
                <div class="col-xs-5">
                    <div class="col-xs-2"><i class="flaticon-technology"></i></div>
                    <div class="nws-txt no-padding">
                        <h5>Phone : </h5>
                        <p>0761-4031437, <br class="block-br">
                            01 234 567 89</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6 pull-right">
                    <div class="col-xs-2"><i class="flaticon-email"></i></div>
                    <div class="nws-txt no-padding">
                        <h5>Mail Us : </h5>
                        <p><a href="mailto:contact@srgit.com">homemaker@gmail.com</a>, <br>
                            <a href="mailto:contact@srgit.com">contact@srgit.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms" data-wow-delay="150ms">
                    <div class="foot-logo"> <img src="{{ asset('assets\imgs\footer-logo.png') }}" alt="" class="img-fluid"> </div>
                    <div class="foot-content">
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
                        </p>
                        <p class="no-margin">Follow us on:</p>
                        <ul class="no-margin no-padding foot-social">
                            <li><a href="https://www.facebook.com/srgit/" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/srgit" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="http://srgit.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                            <li><a href="https://www.instagram.com/srgit/" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/srgit" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://plus.google.com/u/0/111241896454295946416" target="_blank"><i
                                        class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://in.pinterest.com/srgit/" target="_blank"><i
                                        class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms" data-wow-delay="250ms">
                    <div class="foot-logo">
                        <h3 class="montserrat">Quick links</h3>
                    </div>
                    <ul class="no-margin no-padding quick-links">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                    <div class="foot-logo">
                        <h3 class="montserrat">Instagram feeds</h3>
                    </div>
                    <div class="feeds">
                        <!-- SnapWidget -->
                        <iframe src="https://snapwidget.com/embed/790936"
                            class="snapwidget-widget snapwidget-1"></iframe>
                        <!-- SnapWidget -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms" data-wow-delay="450ms">
                    <div class="foot-logo">
                        <h3 class="montserrat">SIGN UP TO OUR NEWSLETTER</h3>
                    </div>
                    {{-- <form method="post" id="subsForm" class="footer-subscribe montserrat text-center" onsubmit="return ajaxmailsubscribe();"> --}}
                    <form method="post" id="subsForm" class="footer-subscribe montserrat text-center" onsubmit="">
                        <input type="hidden" name="from" value="index.html">
                        <input type="email" name="subsemail" id="subsemail" placeholder="Enter your Email here">
                        {{-- <input type="button" value="SUBSCRIBE" onclick="return ajaxmailsubscribe();"> --}}
                        <input type="button" value="SUBSCRIBE" onclick="">
                        <p>We never spam your email <span class="orange-txt">(*)</span> </p>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="pull-left">
                <p>© 2020. Architevo Builder Construction Services</p>
            </div>
            <div class="pull-right">
                <p>Designed & Developed by <a href="http://www.srgit.com/" target="_blank">SRGIT</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- footer-->
</div>
<!-- Scroll Top Button -->
<a href="#top"></a>
<!-- Form Submission Popup -->
<p class="no-margin" data-toggle="modal" data-target="#myModalsubs" id="model2"></p>
<div id="myModalsubs" class="modal fade" role="dialog">
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
<!-- \\Form Submission Popup -->
