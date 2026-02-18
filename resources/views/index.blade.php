@extends('layouts.app')

@section('title', 'Welcome to Quebee Events')

@section('content')
    <!-- Static Banner Parallax Background-->
    <section class="main-slider default-banner">
        <!--Carousel-->      
        <div id="default-slider" class="carousel" data-ride="carousel" data-interval="7000" data-pause="false" data-wrap="true">
            <div class="carousel-inner" role="listbox">
                <!--Slide Item-->
                <div class="item window-size active" data-bg-img="{{ asset('assets/images/main-slider/4.jpg') }}">
              	    <div class="auto-container">
                	<div class="box-inner">
                        <div class="big-title"><h2>QUEBEE EVENTS</h2></div>
                        <h4 class="text-white font-24">Creating Unforgettable Experiences</h4>
                        <div class="text"><p>At Quebee Events, we create experiences that linger long after the lights go out. Our team brings precision, passion, and a touch of magic to every detail.</p></div>
                        <div class="links-box"><a href="{{ route('services') }}" class="default-btn theme-btn">Our Services</a> &ensp; <a href="{{ route('contact') }}" class="default-btn style-two theme-btn">Get Free Quote</a></div>
                    </div>
              	    </div>
                </div>
                <!--Slide Item-->
                <div class="item window-size" data-bg-img="{{ asset('assets/images/main-slider/1.jpg') }}">
                    <div class="auto-container">
                    <div class="box-inner">
                        <div class="big-title"><h2>WEDDING PARTY PLANNING</h2></div>
                        <h4 class="text-white font-24">Where Love Meets Perfection</h4>
                        <div class="text"><p>At Quebee Events, we believe that a wedding is more than a ceremony—it's a celebration of love and unforgettable moments. Our wedding party planning service turns your vision into a flawless experience.</p></div>
                        <div class="links-box"><a href="{{ route('wedding') }}" class="default-btn theme-btn">View Details</a> &ensp; <a href="{{ route('consultation') }}" class="default-btn style-two theme-btn">Free Consultation</a></div>
                    </div>
              	    </div>
                </div>
                <!--Slide Item-->
                <div class="item window-size" data-bg-img="{{ asset('assets/images/main-slider/2.jpg') }}">
                    <div class="auto-container">
                    <div class="box-inner">
                        <div class="big-title"><h2>EVENT COORDINATION</h2></div>
                        <h4 class="text-white font-24">Every Occasion Deserves to Be Unforgettable</h4>
                        <div class="text"><p>At Quebee Events, we believe that every occasion deserves to be unforgettable. We specialize in transforming ideas into seamless experiences with elegance and precision.</p></div>
                        <div class="links-box"><a href="{{ route('event') }}" class="default-btn theme-btn">Learn More</a> &ensp; <a href="{{ route('quotation') }}" class="default-btn style-two theme-btn">Get Quotation</a></div>
                    </div>
              	    </div>
                </div>
                
            </div>
        </div>
    </section>

    
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
                           
							<p>At Quebee Events, we create experiences that linger long after the lights go out. Our team brings precision, passion, and a touch of magic to every detail. Based in based in Nigeria and USA and buzzing with creativity, we turn your vision into unforgettable reality.</p>
                          
                            
                          
                            
                           
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

    
    <!--Start Our Department Areas-->
    <section class="pt-10">
        <div class="container-fluid pb-10">
            <div class="sec-title text-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h2 class="font-sacramento text-thm">OUR FEATURE SERVICE</h2>
                        <h3>WE CARE OUR FEATURE SUPPORT</h3>
                        <div class="mb-15 mt-10"> <img class="img-responsive" src="{{ asset('assets/images/title-bottom.png') }}" alt=""></div>                    
                    </div>                    
                </div>
            </div>
            <div class="sec-content mt-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-4.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-roses-bouquet"></i>
                                <h4 class="title">Free Consultation</h4>
                                <p class="details pt-5">Planning an event should feel exciting—not overwhelming. At Quebee Events, we offer a free initial consultation to help you explore your vision, understand your options, and discover how we can bring your dream celebration to life.</p>
                                 <a href="{{ url('consultation') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-5.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-wedding-cake-3"></i>
                                <h4 class="title">Wedding party </h4>
                                <p class="details pt-5">At Quebee Events, we believe that a wedding is more than a ceremony—it’s a celebration of love, culture, and unforgettable moments. Our wedding party planning service is designed to turn your vision into a flawless experience, where every detail reflects your story and style.
                                 <a href="{{ route('wedding') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-6.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-knife-fork-and-plate"></i>
                                <h4 class="title"> Baby Shower Planning </h4>
                                <p class="details pt-5">Welcoming a new life is one of the most beautiful milestones—and at Quebee Events, we make sure the celebration is just as special. Our baby shower planning service is designed to create a joyful, elegant, and stress-free experience for the parents-to-be and their loved ones.</p>
                                 <a href="{{ url('baby-shower') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-7.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Personal Shopper (within Nigeria and USA)</h4>
                                <p class="details pt-5">At Quebee Events, we go beyond planning unforgettable experiences—we curate them from the ground up. As your trusted personal shopper, we specialize in sourcing, styling, and selecting items that reflect your taste, culture, and occasion.</p>
                                 <a href="{{ route('personal-shopper') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>

                        
                    </div>
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-9.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Event Coordinator </h4>
                                <p class="details pt-5">At Quebee Events, we believe that every occasion deserves to be unforgettable. As a premier event coordination brand, we specialize in transforming ideas into seamless experiences.</p>
                                 <a href="{{ route('event') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>

                        
                    </div>
                           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-10.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Theme Party </h4>
                                <p class="details pt-5">At Quebee Events, we believe every party should be more than just a gathering—it should be an experience. Our theme party planning service transforms ordinary celebrations into immersive, unforgettable moments that reflect your personality, culture, and creativity.</p>
                                 <a href="{{ url('theme-party') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>

                        
                    </div>

                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-8.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Eru Iyawo Packages </h4>
                                <p class="details pt-5">Celebrate Yoruba heritage with grace and style. Our Eru Iyawo packages are thoughtfully curated to honor tradition while reflecting your unique taste. From beautifully wrapped engagement items to culturally significant gifts, Quebee Events ensures every detail is handled with care, creativity, and cultural respect.</p>
                                 <a href="{{ route('quotation') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>

                        
                    </div>
                      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/featured-image-11.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Quotation </h4>
                                <p class="details pt-5">At Quebee Events, we understand that every celebration is unique—and so is its budget. That’s why we offer a personalized quotation service designed to reflect your specific needs, preferences, and vision..</p>
                                 <a href="{{ url('quotation') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>

                        
                    </div>
                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/cooperate.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Corporate Events</h4>
                                <p class="details pt-5">Impress clients and celebrate milestones with our professional corporate event planning services. From business conferences to company celebrations, we create memorable experiences that reflect your brand values.</p>
                                <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>

                        

                        
                    </div>
                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="{{ asset('assets/images/resource/gallery-image-2.jpg') }}" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">General Events</h4>
                                <p class="details pt-5">From birthday parties to anniversaries, graduations to retirement celebrations, our general event planning services ensure every milestone is memorable. We handle all the details so you can focus on enjoying your special occasion.</p>
                                <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>

                    @if(isset($services) && $services->count() > 0)
                        @foreach($services as $service)
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="department">
                                <div class="thumb">
                                    <img class="img-responsive img-fullwidth" src="{{ $service->image_url }}" alt="{{ $service->title }}" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="department-details">
                                    <div class="round-style"></div>
                                    <i class="icon flaticon-curtains"></i>
                                    <h4 class="title">{{ $service->title }}</h4>
                                    <p class="details pt-5">{{ Str::limit($service->description, 100) }}</p>
                                    @if($service->link)
                                        <a href="{{ $service->link }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                    @else
                                        <a href="{{ route('service.show', $service->id) }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
               
                </div>              
            </div>
        </div>
    </section>
    
    
   

    
    <!--Fact Counter-->
   
    
    
    <!--Why Us Section-->
    <section class="why-us-section">
        
        <div class="bg-grey"></div>
        <div class="bg-image" data-bg-img="{{ asset('assets/images/background/bg4.jpg') }}"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 content-column">
                    <article class="inner-box">
                        <div class="sec-title style-two style-three">
                            <h3 class="text-left text-white">What We Offer?</h3>
                            <h2 class="text-left text-white">The reasons that you should contact us</h2>
                            <div class="line"></div>
                        </div>
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">1</div>
                            <h4>Theme Development</h4>
                            <p>We help you choose and style the perfect theme  </p>
                        </div>
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms">2</div>
                            <h4>Venue Setup</h4>
                            <p>We transform any space into a cozy celebration</p>
                        </div>
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">3</div>
                            <h4>Decor & Styling</h4>
                            <p>Balloon arches, floral backdrops, and custom signage that match your theme.</p>
                        </div>
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">4</div>
                            <h4>Games & Entertainment</h4>
                            <p>Fun, interactive activities for your guests.</p>
                        </div>
                           <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">5</div>
                            <h4>Catering & Treats</h4>
                            <p>Curated menus with sweet and savory options.</p>
                        </div>
                           <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">6 </div>
                            <h4>Photography & Keepsakes</h4>
                            <p>Capture every smile with professional coverage.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section parallax" data-bg-img="{{ asset('assets/images/resource/blog-image-3.jpg') }}">
        <div class="container">
            <div class="sec-title style-two">
                <h3 class="text-white">OUR PHOTO GALLERY</h3>
                <h2 class="text-white">WE OFFER YOU THE BEST SUPPORT</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content mt-50">
                <div class="row clearfix">
                    @if(isset($galleryItems) && $galleryItems->count() > 0)
                        @foreach($galleryItems as $item)
                        <div class="col-md-3 col-sm-4 col-xs-12 column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image mr-5">
                                @if($item->type == 'image')
                                    <a href="{{ $item->file_url }}" class="lightbox-image">
                                        <img class="img-responsive" src="{{ $item->file_url }}" alt="{{ $item->title }}" style="height: 200px; width: 100%; object-fit: cover;">
                                    </a>
                                    <div class="overlay-box"><a href="{{ $item->file_url }}" class="link lightbox-image" title="{{ $item->title }}"><span class="txt font-30"><i class="fa fa-camera"></i></span></a></div>
                                @else
                                    <video class="img-responsive" controls style="height: 200px; width: 100%; object-fit: cover;">
                                        <source src="{{ $item->file_url }}">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </figure>
                        </div>
                        @endforeach
                    @else
                        <!-- Fallback Static Content if no dynamic items -->
                        <div class="col-md-12 text-center text-white">
                            <p>No gallery items uploaded yet.</p>
                        </div>
                    @endif
                </div>
            </div>
            <br><br>
            <div class="link-box"><a href="{{ route('gallery') }}" class="default-btn theme-btn">View Project</a></div>
        </div>
    </section>

    
    <!-- Blog Section -->
    <section class="blog-section pt-50 pb-50">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h3>FROM OUR BLOG</h3>
                <h2>Latest News & Articles</h2>
                <div class="mb-30 mt-20"> <img class="img-responsive" src="{{ asset('assets/images/title-bottom.png') }}" alt=""></div>
            </div>
            <div class="row clearfix">
                @if(isset($posts) && $posts->count() > 0)
                    @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="blog-post">
                            @if($post->image_url)
                            <div class="image">
                                <a href="#"><img class="img-responsive" src="{{ $post->image_url }}" alt="{{ $post->title }}" style="height: 250px; width: 100%; object-fit: cover;"></a>
                            </div>
                            @endif
                            <div class="post-title">
                                <h2><a href="#">{{ $post->title }}</a></h2>
                            </div>
                            <div class="post-info">
                                <span class="fa fa-clock-o"></span> {{ $post->created_at->format('M d, Y') }}
                            </div>
                            <div class="post-desc">
                                <p>{{ Str::limit($post->content, 100) }}</p>
                            </div>
                            <div class="more-link">
                                <a class="theme-btn read-more" href="{{ route('blog.show', $post->slug) }}">READ MORE</a>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center mt-30">
                        <a href="{{ route('blog') }}" class="btn thm-btn">View More</a>
                    </div>
                @else
                    <div class="col-md-12 text-center">
                        <p>No blog posts yet.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h3>MEET THE IMPORTANT PEOPLE</h3>
                <h2>Meet the Visionary Behind Quebee Events</h2>
                <div class="mb-30 mt-20"> <img class="img-responsive" src="{{ asset('assets/images/title-bottom.png') }}" alt=""></div>
            </div>
            <div class="row clearfix">
                @if(isset($teamMembers) && $teamMembers->count() > 0)
                    @foreach($teamMembers as $member)
                    <!--Column-->
                    <div class="col-md-6 col-sm-12 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
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
                                    <p>{{ Str::limit($member->bio, 150) }}</p>
                                </div>
                                <div class="social-links">
                                    @if($member->facebook)<a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a>@endif
                                    @if($member->twitter)<a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a>@endif
                                    @if($member->linkedin)<a href="{{ $member->linkedin }}"><i class="fa fa-linkedin"></i></a>@endif
                                    @if($member->instagram)<a href="{{ $member->instagram }}"><i class="fa fa-instagram"></i></a>@endif
                                </div>
                                <div class="more-link"><a href="{{ route('team') }}" class="read-more"><span class="fa fa-caret-right"></span> More Info </a></div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                @else
                    <!-- Fallback Static Content -->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <article class="row clearfix">
                            <figure class="col-md-6 col-sm-6 col-xs-12 image"><a href="#"><img class="img-responsive" src="{{ asset('assets/images/resource/groom-image-1.jpg') }}" alt=""></a></figure>
                            <div class="col-md-6 col-sm-6 col-xs-12 content">
                                <div class="title-box">
                                    <h4>Omolola  Hudson (QBee Event)</h4>
                                    <p>Founder & CEO</p>
                                </div>
                                <div class="text">
                                    <p>The CEO of Quebee Events is a certified event management planner from Nigeria whose flair for curating unforgettable experiences has now crossed international borders.</p>
                                </div>
                                <div class="more-link"><a href="{{ route('about-her') }}" class="read-more"><span class="fa fa-caret-right"></span> More Info </a></div>
                            </div>
                        </article>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/flipclock.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
@endsection
