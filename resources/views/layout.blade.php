
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    <link rel="stylesheet" type="text/css" href="{{asset('css/bulma.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blueberry.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font.css')}}">
    <style>
    </style>
    @yield('style')
    </head>
    <body>
    <nav class="nav has-shadow">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item is-mobile is-hidden-desktop">
                    <img src="{{asset('/img/MTU.png')}}">
                </a>
                <p class="nav-item is-hidden-mobile">
                    Mandalay Technological University
                </p>
                <p class="nav-item is-hidden-desktop" style="font-size: 13px; padding-left: 0!important;padding-right: 0!important;">
                    Mandalay Technological University
                </p>
            </div>
            <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
            </span>
            <div class="nav-right nav-menu">
                <a href="/" class="nav-item is-tab is-hidden-tablet
                {{ Request::path() ==  '/' ? 'is-active' : ''  }}">Home</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'depertments') ? 'is-active' : ''  }}">Depertments</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'academic') ? 'is-active' : ''  }}">Academic Plan</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'activities') ? 'is-active' : ''  }}">Activities</a>
                <a href="/research" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'Research') ? 'is-active' : ''  }}">Research</a>
                <a href="/research" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'alumni') ? 'is-active' : ''  }}">Alumni</a>
                <a href="/about" class="nav-item is-tab is-hidden-tablet
                {{ strstr(Request::path(),'about') ? 'is-active' : ''  }}">About</a>
                <a href="/" class="nav-item is-tab is-hidden-mobile 
                {{ Request::path() == '/' ? 'is-active' : ''  }}">Home</a>
                <a href="/depertments" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'depertments') ? 'is-active' : ''  }}">Depertments</a>
                <a href="/academic" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'academic') ? 'is-active' : ''  }}">Academic Plan</a>
                <a href="/activities" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'activities') ? 'is-active' : ''  }}">Activities</a>
                <a href="/research" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'research') ? 'is-active' : ''  }}">Research</a>
                <a href="/research" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'alumni') ? 'is-active' : ''  }}">Alumni</a>
                <a href="/about" class="nav-item is-tab is-hidden-mobile
                {{ strstr(Request::path(),'about') ? 'is-active' : ''  }}">About</a>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- <script type="text/javascript" src="./bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.blueberry.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
