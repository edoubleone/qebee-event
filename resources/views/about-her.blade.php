@extends('layouts.app')

@section('title', 'About Her - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>About Her</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">About Her</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#doctor-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
      
    <!-- Section: Doctor Details -->
    <section id="doctor-section" class="doctor-details get-quote">
      <div class="container pt-60">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 pl-60 pl-sm-15">
              <div>
                <h3>Omolola Hudson</h3>
                <h5 class="text-thm">
Meet the Visionary Behind Quebee Events</h5>
                <p>The CEO of Quebee Events is a certified event management planner from Nigeria whose flair for curating unforgettable experiences has now crossed international borders. Based in Atlanta, Georgia, she made her dazzling international debut on September 27, 2025, orchestrating the spectacular Meg @ 60 birthday celebration—a milestone event that blended elegance, cultural richness, and flawless execution.

Her journey from Nigeria to the global stage is a testament to her creativity, precision, and passion for bringing people together through extraordinary events. With Quebee Events now stepping into the international spotlight, the world can expect more moments of magic, one celebration at a time.</p>
              </div>
             
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4 mb-30">
              <div class="doctor-thumb">
                <img class="img-responsive" src="{{ asset('assets/images/resource/groom-image-1.jpg') }}" alt="">
              </div>
              <ul class="social-icons icon-thm mt-15 mb-15 text-center">
               
                <li><a href="https://www.instagram.com/quebee__event/?igsh=cnFzbnZ5Z2lkc3A4#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
@endsection
