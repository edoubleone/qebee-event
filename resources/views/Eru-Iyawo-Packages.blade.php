@extends('layouts.app')

@section('title', 'Eru Iyawo Packages - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Eru Iyawo Packages</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Eru Iyawo Packages</li>
            </ul>
        </div>
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
    </section>

    
    <!--Sidebar Section-->
    <div class="sidebar-section" id="sidebar-section">
        <div class="auto-container">
        	<div class="row clearfix">
                <!--Content Side-->
                <div class="col-md-9 col-sm-8 col-xs-12 content-side">
                    <section class="service-details">
                        <figure class="full-image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/featured-image-8.jpg') }}" alt=""></a></figure>
                        <div class="content-outer">
                            <h2>Eru Iyawo Packages</h2>
                            <p>Celebrate Yoruba heritage with grace and style. Our Eru Iyawo packages are thoughtfully curated to honor tradition while reflecting your unique taste. From beautifully wrapped engagement items to culturally significant gifts, Quebee Events ensures every detail is handled with care, creativity, and cultural respect. Let us help you make this cherished moment unforgettable.</p>
                        </div>
                    </section>
                </div>
                
                <!--Sidebar-->
                
    		</div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
@endsection
