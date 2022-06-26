<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet"
    href="{{asset('css/app.css')}}">
    @yield('css')

    <title>
       @yield('page-title', 'AraigMountainBike')
    </title>
</head>
<body>

     @include('partials.header')

    <main>
       @yield('content')
    </main>

    @include('partials.footer')
    
    <script src="{{asset('js/app.js')}}"></script>
    @yield('script')

</body>
</html>
