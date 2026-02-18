@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/resource/featured-image-5.jpg') }}">
        <div class="auto-container">
            <h1>Gallery</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#gallery-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section parallax" data-bg-img="images/parallax/image-1.jpg" id="gallery-section">
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
                        <!--Column-->
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
                        <div class="col-md-12 text-center text-white">
                            <p style="color: #333;">No gallery items found.</p>
                        </div>
                    @endif
                    
                </div>
                
                <!-- Pagination -->
                <div class="styled-pagination text-center">
                    {{ $galleryItems->links() }}
                </div>
            </div>
            
            <br><br>
        </div>
    </section>
  
    

    <!--Why Us Section-->
    <section class="why-us-section">
        
        <div class="bg-grey"></div>
        <div class="bg-image" style="background-image:url(images/background/bg4.jpg);"></div>
        
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12 content-column">
                    <article class="inner-box">
                        <div class="sec-title style-two style-three">
                            <h3 class="text-left text-white">Why choose us?</h3>
                            <h2 class="text-left text-white">The reasons that you should contact us</h2>
                            <div class="line"></div>
                        </div>
                        
                        <div class="block">
                            <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">1</div>
                            <h4>Over 20 years of experience</h4>
                            <p>Nunc fringilla eros vitae nisl posuere, ut consectetur nulla feugiat. Nullam ut mauris vitae tortor sodales efficitur.</p>
                         </div>
                         
                         <div class="block">
                            <div class="number wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms">2</div>
                            <h4>We have expert's and Guaranteed Work.</h4>
                            <p>Quisque ac orci ante. Proin sit amet turpis lobortis, imperdiet nisi ut, viverra lorem. Nullam ex massa, euismod vel metus non.</p>
                         </div>
                         
                         <div class="block">
                            <div class="number wow rollIn" data-wow-delay="600ms" data-wow-duration="1500ms">3</div>
                            <h4>We are improving everyday</h4>
                            <p>Nunc fringilla eros vitae nisl posuere, ut consectetur nulla feugiat. Nullam ut mauris vitae tortor sodales efficitur.</p>
                         </div>
                    
                    </article>
                </div>
            </div>
        </div>
    </section>

    
@endsection
