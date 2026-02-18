@extends('layouts.app')

@section('title', 'Feature Service - Quebee Events')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>Our Feature Service</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Feature Service</a></li>
            </ul>
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#department-section"><span class="icon fa fa-arrow-down"></span></div>
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
                                 <a href="{{ url('wedding') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
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
                                 <a href="{{ url('personal-shopper') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
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
                                 <a href="{{ url('event') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
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
                                 <a href="{{ url('quotation') }}" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
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
@endsection

@section('scripts')
<script src="{{ asset('assets/js/revolution.min.js') }}"></script>
@endsection
