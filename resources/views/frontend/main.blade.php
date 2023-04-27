<!DOCTYPE html>
<html>
@include('frontend.partials.top-header')
@include('frontend.partials.header')

@yield('css')
<body>
    @yield('content')
</body>
@include('frontend.partials.footer')
@yield('script')
</html>