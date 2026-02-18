@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/background/page-title-1.jpg') }}">
        <div class="auto-container">
            <h1>{{ $service->title }}</h1>
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li>{{ Str::limit($service->title, 20) }}</li>
            </ul>
        </div>
    </section>
    
    <!--Service Detail Section-->
    <section class="service-detail-section" style="padding: 80px 0;">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
    				<!--Service Detail-->
                    <div class="service-detail">
                        <div class="inner-box">
                            @if($service->image_url)
                            <div class="image-box">
                                <img src="{{ $service->image_url }}" alt="{{ $service->title }}" class="img-responsive" style="width: 100%; max-height: 500px; object-fit: cover;">
                            </div>
                            @endif
                            <div class="lower-content" style="margin-top: 30px;">
                                <h2>{{ $service->title }}</h2>
                                <div class="text">
                                    <p>{!! nl2br(e($service->description)) !!}</p>
                                </div>
                                
                                @if($service->link)
                                <div class="link-box" style="margin-top: 20px;">
                                    <a href="{{ $service->link }}" class="theme-btn btn-style-one" target="_blank">Visit External Link</a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
    		</div>
        </div>
    </section>
@endsection
