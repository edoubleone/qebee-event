@extends('layouts.app')

@section('title', 'Event Coordinator - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Event Coordinator</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Event Coordinator</li>
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
                        <figure class="full-image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/event.jpg') }}" alt=""></a></figure>
                        <div class="content-outer">
                            <h2>About Quebee Events – Your Trusted Event Coordination Partner</h2>
                            <p>At Quebee Events, we believe that every occasion deserves to be unforgettable. As a premier event coordination brand, we specialize in transforming ideas into seamless experiences—whether it's a lavish wedding, a corporate gala, or a culturally rich ceremony like Eru Iyawo.</p>
                            
                            <p>Our role goes far beyond planning. We are the calm in the chaos, the detail-keepers, and the behind-the-scenes architects who ensure your event unfolds flawlessly.</p>
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
