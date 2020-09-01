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
    <link rel="icon" href="{{ asset('assets\imgs\favicon.ico') }}" type="image/x-icon">
    <title>Architevo Builder : Construction Services</title>
    <!-- Template CSS -->
    <link href="{{ asset('assets\css\default.css') }}" rel="stylesheet">
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
                        <h1>Contact Us</h1>
                        <h1 class="titlecolor">V2</h1>
                        <img src="{{ asset('assets\imgs\linew.png') }}" alt="">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="active">Contact Us V2</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--\\ Inner Header -->

    <!-- Content Section -->
    <div class="spacing no-spacing">
        <div id='mapkit-7453' class="gl-mp style2"></div>
    </div>
    <div class="content-section about-page-section">
        <div class="container top-contact-main">
            <div class="container">
                <div class="cnt-info-wrp overlap50 remove-ext3">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="cnt-inf-bx"> <i class="fa fa-phone"></i> <strong>Phone</strong> <span>+91
                                    761-4031437</span> <span>+91 123-456-7890</span> </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="cnt-inf-bx"> <i class="fa fa-map-marker"></i> <strong>Address</strong> <span>385
                                    "Shubham" New Adarsh Colony near MR4 road, I/F Gajannan Park Jabalpur, (MP)</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="cnt-inf-bx"> <i class="fa fa-envelope-o"></i> <strong>Email</strong> <a
                                    href="mailto:contact@homemaker.com" title="">contact@homemaker.com</a> <a
                                    href="mailto:contact@srgit.com" title="">contact@srgit.com</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-50 pb-50">
        <div class="container">
            <div class="cnt-frm-dta">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="cnt-inf">
                            <h2>Get In Touch</h2>
                            <p>Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat
                                porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Integer posuere
                                erat a ante venenatis dapibus posuere</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="cnt-frm">
                            <form action="/" method="post" id="contactForm2">
                                <div class="row mrg10">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Name" name="name" id="contact_name2">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Email" name="email" id="contact_email2">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <textarea name="message" id="contact_message2" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        {{-- <button class="theme-bg theme-btn" type="button" onclick="return ajaxmailcontact2();">SUBMIT NOW</button> --}}
                                        <button class="theme-bg theme-btn" type="button" onclick="">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact From Data -->
        </div>
    </div>

    <!--\\ Content Section -->

    @include('partials/footer')

    <!-- The Modal -->
    <!-- \\ Form Submission Popup -->
    <!-- Jquery Section  -->
    <!-- Form Script -->
    <script src="{{ asset('assets\js\ajax.js') }}"></script>
    <script src="{{ aset('assets\js\formValidation.js') }}"></script>
    <!-- JavaScript Library -->
    <script src="{{ asset('assets\js\jquery-2.2.4.min.js') }}"></script>
    <!-- Bootstrap v4.1.3 JavaScript -->
    <script src="{{ asset('assets\js\bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets\js\owlcarousel\owl.carousel.staff.js') }}"></script>
    <!-- Number Counter -->
    <script src="{{ asset('assets\js\numscroller-1.0.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets\js\custom-carousel.js') }}"></script>
    <!-- Fixed header -->
    <script src="{{ asset('assets\js\classie.js') }}"></script>
    <script src="{{ asset('assets\js\cbpAnimatedHeader.js') }}"></script>

    <!-- map JS & CSS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvaePWv-3JD7YYe7f84kbpV1j0RhtBKno&extension=.js">
    </script>
    <script src="{{ asset('assets\js\map-js\infobox.js') }}"></script>
    <link href="{{ asset('assets\js\map-js\infobox.css') }}" rel="stylesheet">
    <script src="{{ asset('assets\js\map-js\custom-map.js') }}"></script>
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
