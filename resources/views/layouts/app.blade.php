<!DOCTYPE html>

<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Webwiz">
    <meta name="author" content="Noticeboard Team">
    <meta name="author" content="Ogele Timothy">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Lost and Found - MAC')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/search.jpg') }}">

    <link href="{{ asset('assets/css/flexslider.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/line-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/elegant-icons.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/js/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('assets/js/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script src="https://kit.fontawesome.com/24210e79d2.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ie9.css') }}" />
    <![endif]-->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('assets/js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

</head>
<body>
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
    <nav class="top-bar overlay-bar">
        <div class="container">

            <div class="row nav-menu">
                <div class="col-sm-5 col-md-4 columns">
                    <a href="{{ url('/') }}">
                        <img class="logo logo-light" alt="Logo" src="{{ asset('assets/img/UpToFind.png') }}">
                        <img class="logo logo-dark" alt="Logo" src="{{ asset('assets/img/UpToFind.png') }}">
                    </a>
                </div>

                <div class="col-sm-7 col-md-8 columns">
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a  href="">Forum</a></li>
                        @if (Auth::guest())
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Signup</a></li>
                        @else
                            <li><a href="{{ url('home') }}">Dashboard</a></li>
                            <li><a href="{{ url('logout') }}">Logout</a></li>
                        @endif
                    </ul>

                    <ul class="social-icons text-right">

                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://facebook.com/" target="_blank">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://instagram.com/" target="_blank">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end of row-->

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div><!--end of container-->
    </nav>

</div>

<div class="main-container">
    @yield('body')
</div>

<div class="footer-container" >

<footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                <img class="logo logo-light" alt="Logo" src="{{ asset('assets/img/UpToFind.png') }}">
                <div style="height:50px; width:100%; clear:both;"></div>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-dark mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                    <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Get started</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-dark mb-3">Quick links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a  href="">Forum</a></li>
                        @if (Auth::guest())
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('register') }}">Signup</a></li>
                        @else
                            <li><a href="{{ url('home') }}">Dashboard</a></li>
                            <li><a href="{{ url('logout') }}">Logout</a></li>
                        @endif
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-dark mb-3">Newsletter</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('assets/js/skrollr.min.js') }}"></script>
<script src="{{ asset('assets/js/spectragram.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollReveal.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/twitterFetcher_v10_min.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


</body>
</html>
