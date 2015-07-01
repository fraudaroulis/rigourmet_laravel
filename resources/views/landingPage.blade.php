@extends('layouts.master')

@section('head_scripts')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-58122075-1', 'auto');
        ga('send', 'pageview');

    </script>
@endsection

@section('content')
    <!-- Top content -->
    <div id="home" class="parallax top-content" data-stellar-background-ratio="0.3">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                        <h2>Rigourmet</h2>
                        <h3>be a professional, not just a cook</h3>
                        <div class="description">
                        </div>
                        <div class="top-button">
                            <a class="btn btn-top btn-lg" href="#features-section"> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hero">
                <video autoplay muted loop id="pretzel-video" class="video-playing">
                    <source src="assets/header_vid.mp4" type="video/mp4">
                    <source src="assets/header_vid.webm" type="video/webm">
                </video>
            </div>
        </div>
    </div>

    @include('features')

    {{--@include('product')--}}

    @include('subscription')

    {{--@include('team')--}}

    {{--@include('testimonials')--}}

    @include('contact')

    @section('footer')
        <!-- footer -->
        <div id="footer" class="follow">
            <h3>Follow Us</h3>
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse suscipit tellus vitae tellus porta rutrum. Aliquam imperdiet nulla id scelerisque auctor.</p>
            <div class="follow-us">
                <a href="#" class="social-icon">
                    <div>
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="#" class="social-icon">
                    <div>
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>

                <a href="#" class="social-icon">
                    <div>
                        <i class="fa fa-linkedin"></i>
                    </div>
                </a>

                <a href="#" class="social-icon">
                    <div>
                        <i class="fa fa-pinterest"></i>
                    </div>
                </a>

                <a href="#" class="social-icon">
                    <div>
                        <i class="fa fa-google-plus"></i>
                    </div>
                </a>
            </div>
        </div>

        @parent
    @stop
@endsection
