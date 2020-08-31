<!DOCTYPE html>
<html lang="en">
<!-- Head-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Favicon-->
    <link rel="icon" href="assets\imgs\favicon.ico" type="image/x-icon">
    <title>Architevo Builder : Construction Services</title>
    <!-- Template CSS -->
    <link href="assets\css\default.css" rel="stylesheet">
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
                        <h1>Contact</h1>
                        <h1 class="titlecolor">us</h1>
                        <img src="assets\imgs\linew.png" alt="">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--\\ Inner Header -->

    <!-- Content Section -->
    <div class="content-section about-page-section">
        <div class="container top-contact-main">
            <h2 class="text-center text-uppercase">Get in<span class="orange-txt"> touch</span></h2>
            <div class="border-creative text-center"><img src="assets\imgs\borders\border.png" alt=""></div>
            <div class="top-contact">
                <div class="row">
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4"> <span class="icon-contact"> <i class="flaticon-placeholder-1"></i>
                            </span></div>
                        <div class="col-xs-8 no-padding">
                            <p>385 "Shubham" New Adarsh Colony near MR4 road, I/F Gajannan Park Jabalpur, (MP)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-mobile"></i> </span></div>
                        <div class="col-xs-8 no-padding">
                            <p class="phone-mail">+91 761-4031437 (10 AM -09 PM)<br>
                                +91 123-456-7890 (10 AM -09 PM)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12  no-padding">
                        <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-envelope-o"></i> </span>
                        </div>
                        <div class="col-xs-8 no-padding">
                            <p class="phone-mail"> <a href="mailto:contact@srgit.com">contact@homemaker.com</a> <a
                                    href="mailto:contact@srgit.com">contact@srgit.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section light-bg form-section">
            <div class="container">
                <form action="/" method="post" id="contactForm">
                    <div class="col-xs-4 no-padding">
                        <label>Name *</label>
                        <input type="text" class="form-control" name="name" id="contact_name">
                    </div>
                    <div class="col-xs-4 no-padding">
                        <label>Email *</label>
                        <input type="email" class="form-control" name="email" id="contact_email">
                    </div>
                    <div class="col-xs-4 no-padding">
                        <label>Subject *</label>
                        <input type="text" class="form-control" name="subject" id="contact_subject">
                    </div>
                    <div class="col-xs-12 no-padding">
                        <label>Message *</label>
                        <textarea class="form-control" name="message" id="contact_message"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <input type="button" value="send message" class="submit" onclick="return ajaxmailcontact();">
                        <input type="reset" value="reset" class="reset">
                    </div>
                </form>
                <div class="clearfix"></div>
                <!-- /col -->
            </div>
        </div>
        <div id='mapkit-7453'></div>
    </div>
    <!--\\ Content Section -->

    @include('partials/footer')


    <!-- \\ Form Submission Popup -->
    <!-- Jquery Section  -->
    <!-- Form Script -->
    <script src="{!! asset('assets\js\ajax.js') !!}"></script>
    <script src="{!! asset('assets\js\formValidation.js') !!}"></script>
    <!-- JavaScript Library -->
    <script src="{!! asset('assets\js\jquery-2.2.4.min.js') !!}"></script>
    <!-- Bootstrap v4.1.3 JavaScript -->
    <script src="{!! asset('assets\js\bootstrap.min.js') !!}"></script>
    <!-- Owl Carousel -->
    <script src="{!! asset('assets\js\owlcarousel\owl.carousel.staff.js') !!}"></script>
    <!-- Number Counter -->
    <script src="{!! asset('assets\js\numscroller-1.0.js') !!}"></script>
    <!-- Custom JS -->
    <script src="{!! asset('assets\js\custom-carousel.js') !!}"></script>
    <!-- Fixed header -->
    <script src="{!! asset('assets\js\classie.js') !!}"></script>
    <script src="{!! asset('assets\js\cbpAnimatedHeader.js') !!}"></script>

    <!-- map JS & CSS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvaePWv-3JD7YYe7f84kbpV1j0RhtBKno&extension=.js">
    </script>
    <script src="{!! asset('assets\js\map-js\infobox.js') !!}"></script>
    <link href="{!! asset('assets\js\map-js\infobox.css') !!}" rel="stylesheet">
    <script src="{!! asset('assets\js\map-js\custom-map.js') !!}"></script>


    <script>
        function ckhformsubscribe1() {
            if (document.getElementById("subsemail").value == '') {
                alert("Please Enter Your Email Address");
                document.getElementById("subsemail").value = '';
                document.getElementById("subsemail").focus();
                return false;
            }
            if (!validateEmail("Email Address", document.getElementById("subsemail").value)) {
                document.getElementById("subsemail").click();
                document.getElementById("subsemail").focus();
                return false;
            }
            return true;
        }


        function ajaxmailsubscribe1() {

            if (ckhformsubscribe1() == true) {
                //alert(2);
                var form_data = $('#subsForm').serialize();
                //alert(form_data);
                $.ajax({
                    url: "php/mailcontroller.php?mode=subscriber",
                    type: "POST",
                    data: form_data,
                    cache: false,
                    async: false,
                    success: function (data) {
                        //alert(data);
                        if (data == 1) {
                            $('#myModalsubs').click();
                            $('#subsForm')[0].reset();
                        } else if (data == 0) {
                            alert('Please Enter Subscription Email')
                            document.getElementById("subsemail").focus();
                            $('#subsForm')[0].reset();
                        } else if (data == 2) {
                            alert('Please Enter Valid Email Address')
                            document.getElementById("subsemail").focus();
                            $('#subsForm')[0].reset();
                        }
                    }
                });
            }
        }

    </script>


</body>
<!-- // Body -->

</html>
<!-- // HTML -->
