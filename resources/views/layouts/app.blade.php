<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>@yield('title','Editorial')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('html5up-editorial/assets/css/main.css') }}" />
    @stack('styles')
</head>
<body class="@yield('body_class','')">
    <div id="wrapper">
        <div id="main">
			      <div class="inner">
                @include('layouts.header')

                @yield('content')
            </div>
        </div>
        @include('layouts.sidebar')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('html5up-editorial/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('html5up-editorial/assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('html5up-editorial/assets/js/breakpoints.min.js') }}"></script>
    <script src="{{ asset('html5up-editorial/assets/js/util.js') }}"></script>
    <script src="{{ asset('html5up-editorial/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>