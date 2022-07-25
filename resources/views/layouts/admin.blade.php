<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="{{asset('img/LOGO.png')}}" />

    <link rel="stylesheet"
    href="{{asset('css/app.css')}}">
    @yield('css')

    <title>
    @yield('page-title', 'Araig Admin')
    </title>
</head>
<body>

    <main>
       @yield('content')
    </main>


    <script src="{{asset('js/app.js')}}"></script>
    @yield('script')

    
</body>
</html>