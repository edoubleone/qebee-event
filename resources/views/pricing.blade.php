@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="images/background/page-title-1.jpg">
        <div class="auto-container">
            <h1>Our Pricing</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Pricing</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#about-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>

    <!-- Pricing Section -->
    <section data-bg-color="#f7f7f7">
        <div class="container">
            <div class="row sm-width5-center">
                <div class="col-md-4">
                    <div class="pricing-table mt-60">
                        <div class="pricing-header">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/pricing-img-1.jpg" alt="">
                            </div>
                            <div class="package-price">
                                10% <br> <span>Discount</span>
                            </div>
                        </div>
                        <div class="pricing-title">Standard Plan</div>
                        <div class="pricing-feature">
                            <ul>
                                <li>6 Days a Week</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Diet Plan Included</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Morning & Evening Batches</li>
                                <li>Free Consultation</li>
                            </ul>
                        </div>
                        <div class="text-center"><a class="btn thm-btn btn-block bdrs-0 p-20 font-16" href="{{ route('pricing') }}">GET DISCOUNT</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table active mt-60">
                        <div class="pricing-header">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/pricing-img-2.jpg" alt="">
                            </div>
                            <div class="package-price">
                                15% <br> <span>Discount</span>
                            </div>
                        </div>
                        <div class="pricing-title">Basic Plan</div>
                        <div class="pricing-feature">
                            <ul>
                                <li>6 Days a Week</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Diet Plan Included</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Morning & Evening Batches</li>
                                <li>Free Consultation</li>
                            </ul>
                        </div> 
                        <div class="text-center"><a class="btn thm-btn btn-block bdrs-0 p-20 font-16" href="{{ route('pricing') }}">GET DISCOUNT</a></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table mt-60">
                        <div class="pricing-header">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/pricing-img-3.jpg" alt="">
                            </div>
                            <div class="package-price">
                                20% <br> <span>Discount</span>
                            </div>
                        </div>
                        <div class="pricing-title">Gold Plan</div>
                        <div class="pricing-feature">
                            <ul>
                                <li>6 Days a Week</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Diet Plan Included</li>
                                <li>Dedicated Trainer Alocated</li>
                                <li>Morning & Evening Batches</li>
                                <li>Free Consultation</li>
                            </ul>
                        </div>
                        <div class="text-center"><a class="btn thm-btn btn-block bdrs-0 p-20 font-16" href="{{ route('pricing') }}">GET DISCOUNT</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--Start Our Department Areas-->
    <section>
        <div class="container-fluid pb-35">
            <div class="sec-title">
                <h3>WE CARE OUR FEATURE SUPPORT</h3>
                <h2>OUR FEATURE SERVICE</h2>
                <div class="line"></div>
            </div>
            <div class="sec-content mt-50">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-4.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-roses-bouquet"></i>
                                <h4 class="title">Flowers</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-5.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-wedding-cake-3"></i>
                                <h4 class="title">Cakes</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-6.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-knife-fork-and-plate"></i>
                                <h4 class="title">Catering</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-7.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-curtains"></i>
                                <h4 class="title">Decoration</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-71.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-wedding-video"></i>
                                <h4 class="title">Photos & Videos</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-9.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-balloons-3"></i>
                                <h4 class="title">Entertainmeint</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-10.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-wedding-car"></i>
                                <h4 class="title">Car Support</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="department">
                            <div class="thumb">
                                <img class="img-responsive img-fullwidth" src="images/resource/featured-image-11.jpg" alt="">
                            </div>
                            <div class="department-details">
                                <div class="round-style"></div>
                                <i class="icon flaticon-wedding-invitation-3"></i>
                                <h4 class="title">Invitation</h4>
                                <p class="details pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae quia eligendi libero, laborum quaerat hic. Nesciunt, mollitia, rerum. Ex obcaecati ut consectetur ipsum a ipsam repellendus quas earum odit....</p>
                                 <a href="#" class="thm-btn btn-xs mr-5"><i class="fa fa-angle-double-right"></i> Read More</a>
                                 <a class="thm-btn inverse btn-xs" href="#"><i class="fa fa-heart"></i> Support</a>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>

    
    <!--Fact Counter-->
    <section class="fact-counter">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="700" data-stop="1500">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">SUCCESSFULL PROJECT</h4>
                </article>
                
                <!--Column-->
                <article class="col-md-3 col-sm-6 col-xs-12 column wow fadeIn" data-wow-duration="0ms">
                    <div class="count-outer"><span class="count-text" data-speed="2000" data-stop="9108">0</span></div>
                    <div class="line"></div>
                    <h4 class="counter-title">HAPPY PEOPLE</h4>
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
