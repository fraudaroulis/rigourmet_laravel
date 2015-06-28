<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title>
        @section('title')
            Rigourmet | Eat locally. Meet Globally.
        @show
    </title>
    @section('meta_keywords')
        <meta name="keywords" content="food, social dinning, network, cook, foodie" />
    @show
    @section('meta_author')
        <meta name="author" content="George Pilpilidis" />
    @show
    @section('meta_description')
        <meta name="description" content="Το Rigourmet είναι μια πλατφόρμα κοινωνικής δικτύωσης που ενώνει επαγγελματίες μάγειρες με λάτρεις του φαγητού για μια μοναδική εμπειρία." />
        @show
                <!-- Mobile Specific Metas
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS
        ================================================== -->
        <style>
            body {
                padding: 50px 0 0;
            }

        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/main/general.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main/frontend.css') }}">


    @section('styles')
        {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Kaushan+Script') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700') }}
        @show


                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons
        ================================================== -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
        <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
        <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-58122075-1', 'auto');
            ga('send', 'pageview');

        </script>
</head>

<body>
<!-- To make sticky footer need to wrap in a div -->
<div id="wrap">
    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="{{{ URL::to('') }}}">{{ HTML::image('img/logo_sm.png', '', array('class' => 'img-responsive')) }}</a>
            </div>
            <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
					</ul> -->

                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href=""></a>
                    </li>
                    @yield('navigation')
                    @if (Auth::check())
                        @if (Auth::user()->hasRole('admin'))
                            <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                        @endif
                        <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                        <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                    @else
                        <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                        <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                    @endif
                </ul>
                <!-- ./ nav-collapse -->
            </div>
        </div>
    </div>
    <!-- ./ navbar -->

    <!-- Header -->
    <header id="header">
        <!-- Header Data -->
        @yield('header')
        <!-- ./ header -->
    </header>
    <!-- ./ header -->

    <!-- Container -->
    <div id="container">
        <!-- Notifications -->
        @include('notifications')
        <!-- ./ notifications -->

        <!-- Content -->
        @yield('content')
        <!-- ./ content -->
    </div>
    <!-- ./ container -->

    <!-- the following div is needed to make a sticky footer -->
    <div id="push"></div>
</div>
<!-- ./wrap -->


<footer class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Rigourmet 2015</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://twitter.com/rigourmet"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/GourMetNextDoor"><i class="fa fa-facebook"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="">Privacy Policy</a>
                    </li>
                    <li><a href="">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Javascripts
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('assets/js/main/frontend.js')}}"></script>
<script src="{{asset('assets/js/main/backend.js')}}"></script>
<script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>

@yield('scripts')
</body>
</html>
