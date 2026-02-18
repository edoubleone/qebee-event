@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="images/background/page-title-1.jpg">
        <div class="auto-container">
            <h1>Team Member</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Team</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#team-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>

    
    <!--Team Section-->
    <section class="team-section" id="team-section">
        <div class="auto-container">
            <div class="sec-title">
                <h3>MEET THE IMPORTANT PEOPLE</h3>
                <h2>WE ARE EXPERTS IN OUR FIELD</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content mt-50">
                <div class="row clearfix">  
                    @if(isset($teamMembers) && $teamMembers->count() > 0)
                        @foreach($teamMembers as $member)
                        <!--Column-->
                        <div class="col-md-6 col-sm-6 col-xs-12 column">
                            <article class="row clearfix">
                                <figure class="col-md-6 col-sm-6 col-xs-12 image">
                                    @if($member->image_url)
                                        <a href="#"><img class="img-responsive" src="{{ $member->image_url }}" alt="{{ $member->name }}" style="height: 300px; object-fit: cover;"></a>
                                    @else
                                        <a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/groom-image-1.jpg') }}" alt="Default Image"></a>
                                    @endif
                                </figure>
                                <div class="col-md-6 col-sm-6 col-xs-12 content">
                                    <div class="title-box">
                                        <h4>{{ $member->name }}</h4>
                                        <p>{{ $member->role }}</p>
                                    </div>
                                    <div class="text">
                                        <p>{{ $member->bio }}</p>
                                    </div>
                                    <div class="social-links" style="margin-top: 15px;">
                                        @if($member->facebook)<a href="{{ $member->facebook }}" style="margin-right: 10px;"><i class="fa fa-facebook"></i></a>@endif
                                        @if($member->twitter)<a href="{{ $member->twitter }}" style="margin-right: 10px;"><i class="fa fa-twitter"></i></a>@endif
                                        @if($member->linkedin)<a href="{{ $member->linkedin }}" style="margin-right: 10px;"><i class="fa fa-linkedin"></i></a>@endif
                                        @if($member->instagram)<a href="{{ $member->instagram }}"><i class="fa fa-instagram"></i></a>@endif
                                    </div>
                                    <div class="more-link"><a href="#" class="read-more"><span class="fa fa-caret-right"></span> More Info </a></div>
                                    
                                </div>
                            </article>
                        </div>
                        @endforeach
                    @else
                        <!-- Fallback Static Content -->
                        <div class="col-md-12 text-center">
                            <p>No team members found.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Fact Counter-->
    <section class="fact-counter bg-img-cover2 parallax-section parallax-section" data-bg-img="images/background/2.jpg">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="700" data-stop="1500">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">SPECIAL SERVICE</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="9108">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">HAPPY CUSTOMERS</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="500" data-stop="80">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">AWARD WINNING</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="1200" data-stop="619">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">RUNNING PROJECT</h4>
                </article>
                
            </div>
        </div>
    </section>
@endsection
