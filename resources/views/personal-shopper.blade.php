@extends('layouts.app')

@section('title', 'Personal Shopper - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Personal Shopper (within Nigeria and USA)</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Personal Shopper</li>
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
                        <figure class="full-image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/shopper.png') }}" alt=""></a></figure>
                        <div class="content-outer">
                            <h2>Personal Shopper (within Nigeria and USA)</h2>
                            <p>At Quebee Events, we go beyond planning unforgettable experiences—we curate them from the ground up. As your trusted personal shopper, we specialize in sourcing, styling, and selecting items that reflect your taste, culture, and occasion.</p>
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
