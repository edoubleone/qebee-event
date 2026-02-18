@extends('layouts.app')

@section('title', 'Wedding Party - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Wedding Party</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Wedding Party</li>
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
                        <figure class="full-image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/wedding.jpg') }}" alt=""></a></figure>
                        <div class="content-outer">
                            <h2>Wedding Party</h2>
                            <p>At Quebee Events, we believe that a wedding is more than a ceremony—it’s a celebration of love, culture, and unforgettable moments. Our wedding party planning service is designed to turn your vision into a flawless experience, where every detail reflects your story and style.</p>
                            
                            <p>Whether you're dreaming of a traditional ceremony or a modern reception, we handle every detail with flair and precision to ensure your special day is perfect.</p>
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
