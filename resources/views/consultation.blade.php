@extends('layouts.app')

@section('title', 'Free Consultation - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Free Consultation</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Free Consultation</li>
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
                            <h2>Free Consultation</h2>
                            <p>Planning an event should feel exciting—not overwhelming. At Quebee Events, we offer a free initial consultation to help you explore your vision, understand your options, and discover how we can bring your dream celebration to life.</p>
                            
                            <h2>Quotation</h2>
                            <p>Whether you're considering a full-service wedding plan, a corporate gathering, or a traditional Eru Iyawo ceremony, this no-obligation session is your chance to:</p>
                            
                            <ul>
                                <li>Share your ideas and preferences</li>
                                <li>Ask questions about our services and packages</li>
                                <li>Receive expert guidance tailored to your event type</li>
                                <li>Get a feel for our planning style and process</li>
                            </ul>
                            
                            <blockquote>
                                <p>"We believe great events start with great conversations. Let's talk about yours."</p>
                            </blockquote>
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
