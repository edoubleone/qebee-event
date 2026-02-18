    <!-- Main Header -->
    <header class="main-header" id="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!-- Top Left -->
            	<div class="top-left">
                	<ul class="clearfix">
                    	<li><a href="#"><span class="fa fa-circle"></span> Hello guest! Welcome to Quebee Events</a></li>
                    </ul>
                </div>
                <!-- Top Right -->
                <div class="top-right">
                	<ul class="clearfix">
                    	<li><a href="tel:4043843414"><span class="fa fa-phone"></span> 404-384-3414</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> 9am - 5pm</a></li>
                        <li><a href="mailto:quebeevents30@gmail.com"><span class="fa fa-at"></span> quebeevents30@gmail.com</a></li>
                        <li><a href="https://www.instagram.com/quebee__event?igsh=cnFzbnZ5Z2lkc3A4" target="_blank"><span class="fa fa-instagram"></span> quebee__event</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Outer Box-->
                <div class="outer-box">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ url('/') }}"><img class="img-responsive" src="{{ asset('assets/images/logo.png') }}" alt="garnen-help"></a>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation">
                                <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="feature-service {{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                                <li class="{{ request()->routeIs('blog') ? 'current' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <!--RSVP Button-->
                    <div class="appoinment-btn">
                        <!-- Modal: donate now Starts -->
                        <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" href="{{ route('contact') }}">contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Lower End-->
        
    </header>
    <!--End Main Header -->
