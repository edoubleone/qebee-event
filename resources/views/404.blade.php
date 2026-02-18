@extends('layouts.app')

@section('content')
    <!--Under Construction Section-->
    <section class="parallax-section theme-overlay overlay-deep-white pt-200 pb-200" style="background-image:url(images/parallax/image-2.jpg);">
        <div class="container">            
            <div class="row clearfix">
                <div class="col-md-8 col-md-offset-2 text-center pt-50 pb-50">
                    <h1 class="font-72 mb-0 text-white">404</h1>
                    <h2 class="text-white mb-10">Oops! Page Not Found</h2>
                    <p class="font-16">The page you were looking for could not be found.</p>
                    <a href="{{ route('home') }}" class="btn btn-default thm-btn btn-lg mt-20">Return Home <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
