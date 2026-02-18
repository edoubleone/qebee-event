<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
@include('components.head')

<body>

    @include('components.preloader')

    @include('components.theme-switcher')

    @include('components.cursor')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            
            @include('components.navbar')

            @yield('content')

            @include('components.footer')

        </div>
    </div>

    @include('components.scripts')

    @yield('scripts')

</body>

</html>
