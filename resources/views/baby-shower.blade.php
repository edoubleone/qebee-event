@extends('layouts.app')

@section('title', 'Baby Shower Planning - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Baby Shower Planning</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>Baby Shower Planning</li>
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
                        <figure class="full-image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/baby-shower.jpg') }}" alt=""></a></figure>
                        <div class="content-outer">
                            <h2>Baby Shower Planning</h2>
                            <p>Welcoming a new life is one of the most beautiful milestones—and at Quebee Events, we make sure the celebration is just as special. Our baby shower planning service is designed to create a joyful, elegant, and stress-free experience for the parents-to-be and their loved ones.</p>
                            
                            <p>Whether you're dreaming of a soft pastel-themed sprinkle, a vibrant gender reveal, or a traditional Godh Bharai or Naming Ceremony, we bring creativity, cultural sensitivity, and flawless execution to every detail.</p>
                            
                            <h2>What We Offer:</h2>
                            <ul>
                                <li><strong>Theme Development:</strong> From "Twinkle Twinkle Little Star" to "Safari Adventure" or minimalist chic, we help you choose and style the perfect theme</li>
                                <li><strong>Venue Setup:</strong> Home, garden, banquet hall—we transform any space into a cozy, picture-perfect celebration</li>
                                <li><strong>Decor & Styling:</strong> Balloon arches, floral backdrops, dessert tables, and custom signage that match your theme</li>
                                <li><strong>Games & Entertainment:</strong> Fun, interactive activities like diaper decorating, baby predictions, and tasting challenges</li>
                                <li><strong>Catering & Treats:</strong> Curated menus with sweet and savory options, plus custom cakes and mocktails</li>
                                <li><strong>Photography & Keepsakes:</strong> Capture every smile and surprise with professional coverage and personalized mementos</li>
                            </ul>
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
