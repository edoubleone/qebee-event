<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('components.head')
</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    @include('components.header')

    @yield('content')

    @include('components.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

@include('components.scripts')

@yield('scripts')

</body>
</html>
