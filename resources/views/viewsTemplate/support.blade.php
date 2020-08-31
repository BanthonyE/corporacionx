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
                    <h1 class="titlecolor">Support</h1>
                    <img src="{!! asset('assets\imgs\linew.png') !!}" alt="">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="active">Support</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Inner Header -->


<!-- Content Section -->
<div class="content-section services-main">
    <div class="container privacy-section"><br>
        <h2 class="text-center text-uppercase">Our <span class="orange-txt">Support</span></h2>
        <div class="border-creative text-center"><img src="{!! asset('assets\imgs\borders\border.png') !!}" alt=""></div>
        <div class="col-xs-12">
            <p> Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor
                fringilla. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac,
                vestibulum at eros. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper.
            </p>
            <p> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero,
                a pharetra augue. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius
                blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
            <p> Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor
                fringilla. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac,
                vestibulum at eros. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper.
            </p>
            <p> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero,
                a pharetra augue. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius
                blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
            <p> Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor
                fringilla. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac,
                vestibulum at eros. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper.
            </p>
            <p> Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero,
                a pharetra augue. Vestibulum id ligula porta felis euismod semper. Maecenas sed diam eget risus varius
                blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<hr>
<!--\\ Content Section -->

@endsection

@section('enlace_footer')


@endsection
