<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        @section('title')
            Rigourmet
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

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/elegant-icons/css/elegant-icons.min.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Colors-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/lime.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/brown.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/yellow.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/purple.css"> -->

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('head_scripts')

</head>

<body data-spy="scroll" data-offset="80">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/el_GR/sdk.js#xfbml=1&version=v2.4&appId=549086841899362";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="navbar navbar-default navbar-fixed-top menu-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{{ URL::to('') }}}">{!! HTML::image('assets/img/logo_sm.png', '', array('class' => 'img-responsive')) !!}</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#features-section">features</a></li>
                    <li><a href="#join">join</a></li>
                    {{--<li><a href="#team-section">team</a></li>--}}
                    <li><a href="#contact-section">contact</a></li>
                    <li><a href="#footer">followUs</a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('content')

    @section('footer')
<div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>

{{ $user }}

        <!-- footer 2 -->
        <div id="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright">&copy;Rigourmet
                            <script type="text/javascript">
                                //<![CDATA[
                                var d = new Date()
                                document.write(d.getFullYear())
                                //]]>
                            </script>
                            - <a href="">Terms of use</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @show

    <!-- Javascript -->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="assets/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
