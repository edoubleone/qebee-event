@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title" data-bg-img="{{ asset('assets/images/resource/featured-image-5.jpg') }}">
        <div class="auto-container">
            <h1>From Our Blog</h1>
            
            <ul class="bread-crumb">
            	<li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    <!--Sidebar Section-->
    <div class="sidebar-section no-bg" id="sidebar-section">
    	
        <div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="col-md-9 col-sm-8 col-xs-12 content-side">
    				<!--Services Section-->
                    <section class="blog-section p-xs-15">
                        
                        @if($posts->count() > 0)
                            @foreach($posts as $post)
                            <!--Post-->
                            <article class="blog-post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                @if($post->image_url)
                                <div class="image">
                                    <a href="#"><img class="img-responsive" src="{{ $post->image_url }}" alt="{{ $post->title }}"></a>
                                </div>
                                @endif
                                <div class="post-title"><h2><a href="#">{{ $post->title }}</a></h2></div>
                                <div class="post-info"><a href="#"><span class="fa fa-user"></span>Admin</a> &ensp;&ensp; <a href="#"><span class="fa fa-clock-o"></span>{{ $post->created_at->format('M d, Y') }}</a></div>
                                <div class="post-desc"><p>{{ Str::limit($post->content, 200) }}</p></div>
                                <div class="more-link"><a class="theme-btn read-more" href="#">READ MORE</a></div>
                            </article>
                            @endforeach

                            <!-- Pagination -->
                            <div class="styled-pagination text-center">
                                {{ $posts->links() }}
                            </div>
                        @else
                            <div class="text-center">
                                <p>No blog posts found.</p>
                            </div>
                        @endif
                         
                    </section>
                </div>
                
                
                <!--Sidebar-->
                <div class="col-md-3 col-sm-4 col-xs-12">
                	<aside class="sidebar p-xs-15">
                    	
                        <!-- Search Form -->
                        <div class="widget search-form">
                        	<h3>Search</h3>
                            
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Search">
                                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Recent Posts</h3></div>
                            
                            @php
                                $recentPosts = \App\Models\BlogPost::where('is_published', true)->latest()->take(3)->get();
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
