@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/resource/featured-image-5.jpg') }}">
        <div class="auto-container">
            <h1>{{ $post->title }}</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li>{{ Str::limit($post->title, 20) }}</li>
            </ul>
            
        </div>
    </section>
    
    <!--Sidebar Section-->
    <div class="sidebar-section no-bg">
    	
        <div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="col-md-9 col-sm-8 col-xs-12 content-side">
    				<!--Services Section-->
                    <section class="blog-section p-xs-15">
                        
                        <!--Post-->
                        <article class="blog-post">
                            @if($post->image_url)
                            <div class="image">
                                <img class="img-responsive" src="{{ $post->image_url }}" alt="{{ $post->title }}" style="width: 100%;">
                            </div>
                            @endif
                            <div class="post-title" style="margin-top: 20px;"><h2>{{ $post->title }}</h2></div>
                            <div class="post-info">
                                <span class="fa fa-user"></span> Admin &ensp;&ensp; 
                                <span class="fa fa-clock-o"></span> {{ $post->created_at->format('M d, Y') }}
                            </div>
                            <div class="post-desc" style="margin-top: 20px;">
                                {!! nl2br(e($post->content)) !!}
                            </div>
                        </article>
                         
                    </section>
                </div>
                
                <!--Sidebar-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                	<aside class="sidebar p-xs-15">
                    	
                        <!-- Recent Posts -->
                        <div class="widget recent-posts">
                            <div class="sidebar-title"><h3>Recent Posts</h3></div>
                            
                            @php
                                $recentPosts = \App\Models\BlogPost::where('is_published', true)
                                    ->where('id', '!=', $post->id)
                                    ->latest()
                                    ->take(3)
                                    ->get();
                            @endphp

                            @foreach($recentPosts as $recent)
                            <div class="post">
                                <div class="post-thumb">
                                    <a href="{{ route('blog.show', $recent->slug) }}">
                                        @if($recent->image_url)
                                            <img class="img-responsive" src="{{ $recent->image_url }}" alt="{{ $recent->title }}">
                                        @else
                                            <img class="img-responsive" src="{{ asset('assets/images/resource/thumb-1.jpg') }}" alt="">
                                        @endif
                                    </a>
                                </div>
                                <h4><a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a></h4>
                            </div>
                            @endforeach
                            
                        </div>
                        
                    </aside>
                </div>
                
    		</div>
        </div>
    </div>
@endsection
