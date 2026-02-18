@extends('layouts.app')

@section('title', 'About Us - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#about-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
    </section>
    
    
    <!--About Section-->
    <section class="about-section" id="about-section">
    	<!--Desc Box-->
    	
       
       <!--Lower Content-->
        <div class="lower-content">
        	<div class="auto-container">
            	<div class="content-box">
                	<div class="row clearfix">
                        <!--Column-->
                    	<div class="col-md-7  col-sm-7 col-xs-12 column">
                        	<h2 class="main-title">About Us</h2>
                           
							<p>At Quebee Events, we don’t just plan—we create experiences that linger long after the lights go out. Whether it’s a lavish wedding, a corporate gala, or an intimate celebration, our team brings precision, passion, and a touch of magic to every detail. Based in based in Nigeria and USA and buzzing with creativity, we turn your vision into unforgettable reality.
Let’s make your next event extraordinary. </p>
                          
                            <h2>Our Event</h2>
                            <p>
Planning Meg at 60 was a beautiful journey, and as the event planner, Quebee Events ensured every detail was thoughtfully executed.
 </p>
                            <p>Next, we prioritized securing an event hall early to avoid any last-minute disappointments. Every payment made to us was carefully documented to maintain transparency and accountability.</p>
                            <p>Once all vendors were booked, we created a dedicated group chat that included the celebrant, where all important updates were shared promptly. To manage guest attendance, we launched an RSVP system to get an accurate headcount, followed by a digital invitation flyer.

Mood was also created for the celebrant to have an Idea on what she needs, how the hall set up will look like and other necessary information to know 

As the event approached, we sent personalized messages to guests with their assigned table numbers to ensure smooth organization. On the day itself, our ushers guided guests to their seats with grace and professionalism.

And then—voilà! The celebration came to life. Each vendor delivered their part flawlessly, and Quebee Events ensured that every “T” was crossed and every “I” dotted. It was a day filled with joy, elegance, and unforgettable memories.</p>
                            
                          
                            
                           
                        </div>
                        <!--Column-->
                    	<div class="col-md-5  col-sm-5 col-xs-12 column">
                            <article class="featured-box">
                            	<figure class="image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/featured-image-5.jpg') }}" alt=""></a></figure>
                               
                            </article>                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Team Section-->

     <section class="gallery-section parallax" data-bg-img="{{ asset('assets/images/resource/blog-image-3.jpg') }}">
        <div class="container">
            <div class="sec-title style-two">
                <h3 class="text-white">OUR PHOTO GALLERY</h3>
                <h2 class="text-white">WE OFFER YOU THE BEST SUPPORT</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content mt-50">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image mr-5">
                            <a href="{{ asset('assets/images/resource/gallery-image-1.jpg') }}" class="lightbox-image"><img class="img-responsive" src="{{ asset('assets/images/resource/gallery-image-1.jpg') }}" alt=""></a>
                            <div class="overlay-box"><a href="{{ asset('assets/images/resource/gallery-image-1.jpg') }}" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <figure class="image mr-5">
                            <a href="{{ asset('assets/images/resource/gallery-image-2.jpg') }}" class="lightbox-image"><img class="img-responsive" src="{{ asset('assets/images/resource/gallery-image-2.jpg') }}" alt=""></a>
                            <div class="overlay-box"><a href="{{ asset('assets/images/resource/gallery-image-2.jpg') }}" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <figure class="image mr-5">
                            <a href="{{ asset('assets/images/resource/gallery-image-5.jpg') }}" class="lightbox-image"><img class="img-responsive" src="{{ asset('assets/images/resource/gallery-image-5.jpg') }}" alt=""></a>
                            <div class="overlay-box"><a href="{{ asset('assets/images/resource/gallery-image-5.jpg') }}" class="link lightbox-image" title="Gallery Photos"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <figure class="image">
                            <!-- Video Gallery Item -->
                            <div class="video-gallery-item">
                                <video class="img-responsive" controls preload="metadata">
                                    <source src="{{ asset('assets/images/resource/gallery-image-6.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="overlay-box" onclick="playVideoFromOverlay(this)">
                                    <a href="javascript:void(0)" class="link video-link">
                                        <span class="txt font-30"><i class="fa fa-play-circle"></i></span>
                                    </a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="link-box"><a href="#" class="default-btn theme-btn">View Project</a></div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
@endsection
