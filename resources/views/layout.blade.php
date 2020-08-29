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
    
    @yield('enlace_head')

</head>
<!-- //  Head-->

<body>

    @yield('prueba')
    @include('partials/header')

    @yield('banner')


    @yield('contenido')


    @include('partials/footer')

    <!-- Jquery Section  --> 
    <!-- Form Script --> 
    <script src="assets\js\ajax.js"></script> 
    <script src="assets\js\formValidation.js"></script> 
    <!-- Javascript Library --> 
    <script src="assets\js\jquery-2.2.4.min.js"></script> 
    <!-- Bootstrap v4.1.3 JavaScript -->
    <script src="assets\js\bootstrap.min.js"></script> 
    <!-- Owl Carousel --> 
    <script src="assets\js\owlcarousel\owl.carousel.staff.js"></script> 
    <!-- Scroll to Top --> 
    <script src="assets\js\scrolltopcontrol.js"></script> 
    <!-- Custom JS --> 
    <script src="assets\js\custom-about.js"></script> 
    <!-- Fixed header --> 
    <script src="assets\js\classie.js"></script> 
    <script src="assets\js\cbpAnimatedHeader.js"></script>

    @yield('enlace_footer')
</body>

</html>
