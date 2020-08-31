@section('title')
@extends('layout')

@section('contenido')



<!-- Content Section -->
<div class="content-section about-page-section">
    <div class="container top-contact-main z-index-none"> <br>
        <br>
        <div class="text-center"><img src="{!! asset('assets\imgs\404.png') !!}" class="page-not-found-img"></div>
        <h2 class="text-center text-uppercase"><span class="orange-txt">Oops!</span> That page <span
                class="orange-txt">can’t</span> be found.</h2>
        <div class="text-center bottom-links"> <a href="{{ route('index') }}" class="submit">GO BACK TO HOME PAGE</a> <a
                href="{{ route('contact') }}" class="reset">Contact us</a> </div>
    </div>
</div>
<!-- \\ Content Section -->


@endsection

@section('enlace_footer')


@endsection
