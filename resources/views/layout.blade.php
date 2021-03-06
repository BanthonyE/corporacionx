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

    @yield('enlace_head')

</head>
<!-- //  Head-->

<body>

    @include('partials/header')

    @yield('contenido')

    @include('partials/footer')

    <!-- Jquery Section  -->
    <!-- Form Script -->
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    <script src="{{ asset('assets/js/formValidation.js') }}"></script>
    <!-- Javascript Library -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Bootstrap v4.1.3 JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.staff.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom-about.js') }}"></script>
    <!-- Fixed header -->
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ asset('assets/js/owl-car-new/owl-carousel.js') }}"></script> 

    <link rel="stylesheet" href="{{ asset('assets/js/fancybox/jquery.fancybox.min.css') }}"/>
    <script  src="{{ asset('assets/js/fancybox/jquery.fancybox.min.js') }}"></script> 
    
    <script src="{{ asset('assets/js/particles.js') }}"></script>
    <script src="{{ asset('assets/js/part-int2.js') }}"></script>




    @yield('enlace_footer')
    
</body>

</html>
