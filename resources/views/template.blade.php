<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all" />

    @yield('head')

</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::path() === 'home' ? 'current_page_item' : ''}}"><a href="/codesnippets/public/home">Homepage</a></li>
                    <li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/codesnippets/public/about">About Us</a></li>
                    <li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/codesnippets/public/articles">Articles</a></li>
                </ul>
            </div>
        </div>

        @yield('header-main')

    </div>
    <div id="wrapper">
        <div id="page" class="container">

            @yield('content')

        </div>
    </div>
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>

</html>