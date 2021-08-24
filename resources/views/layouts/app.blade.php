<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Legendary</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/scmenu-main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sc-spacing.css">
    <link rel="stylesheet" type="text/css" href="/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    @yield('custom_css')
</head>

<body class="defult-home">
    <div class="full-width-header   header-style1 home1-modifiy">
        <header id="sc-header" class="sc-header">
            <div class="topbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <ul class="topbar-contact">
                                <li>
                                    <i class="flaticon flaticon-call"></i>
                                    <a href="tel:+(111)256352">Call: +(111)256 352</a>
                                </li>
                                <li>
                                    <i class="flaticon flaticon-mail"></i>
                                    <a href="mailto:support@rstheme.com">support@softcoders.net</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 text-end">
                            <ul class="topbar-right">
                                @if(Auth::guest())
                                <li class="login-register">
                                    <i class="fa fa-sign-in"></i>
                                    <a href="/login">Login</a> 
                                </li>
                                @else
                                <li class="login-register">
                                    <i class="fa fa-sign-in"></i>
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    / <a href="/register">Register</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-area menu-sticky">
                <div class="container" style = "max-width: 100%; padding-right: 40px; padding-left: 20px;">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-cat-wrap">
                                <div class="logo-part">
                                    <a href="/">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 align-items-center d-flex text-end justify-content-end">
                            <div class="sc-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="sc-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="sc-menu">

                                    </nav>
                                </div>
                            </div>
                            <div class="expand-btn-inner text-end">
                                <span>
                                    <a id="nav-expander" class="nav-expander">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <div id="nav-close">
                        <div class="line">
                            <span class="line1"></span><span class="line2"></span>
                        </div>
                    </div>
                </div>
                <div class="canvas-logo">
                    <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    
                </div>
                <div class="canvas-contact">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    @yield('mainContent')
    <footer id="sc-footer" class="sc-footer footer-bg-image arrow-animation-1">
        <div class="container">
            <div class="footer-newsletter">
                <div class="row align-items-center">
                    <div class="col-md-6 sm-mb-26 mt-30">
                        <div class="police mb-10">
                            <div data-toggle="modal" data-target="#privacyModal">PRIVACY POLICY</div>
                        </div>
                        <div class="police mb-10">
                            <div data-toggle="modal" data-target="#termModal">TERMS AND CONDITIONS</div>
                        </div>
                    </div>
                    <div class="col-md-6" align="right">
                        <h3 class="title white-color mb-20 mr-20">Newsletter</h3>
                        <form action="send" method="get" class="newsletter-form">
                            <input type="email" name="email" placeholder="Your email address" required="">
                            <button type="submit">Subscribe <i class="flaticon flaticon-right-arrow"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 sm-mb-10 text-md-start">
                        <div class="copyright">
                            <p>© Copyright 2021 Legendary Estates Airbnb. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated-arrow-1 animated-arrow left-right-new">
            <img src="{{asset('assets/images/arrow-8.png')}}" alt="">
        </div>
        <div class="animated-arrow-2 animated-arrow up-down-new">
            <img src="{{asset('assets/images/arrow-9.png')}}" alt="">
        </div>

        <div class="animated-arrow-3 animated-arrow up-down-new">
            <img src="{{asset('assets/images/arrow-3.png')}}" alt="">
        </div>
        <div class="animated-arrow-4 animated-arrow left-right-new">
            <img src="{{asset('assets/images/arrow-7.png')}}" alt="">
        </div>
    </footer>
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="assets/js/scmenu-main.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/c"></script>
    <script src="assets/js/main1.js"></script>
    @yield('custom_js')
    <script>
        $(document).ready(function() {
            $("#myModal").modal();
            if($(window).width() < 760){
                $("#logoImg").css('width', '100px');
                if($(".contact-info")){
                    $(".contact-info").css('font-size', '16px');
                }
            }
            $(window).on('resize', function(){
                var win = $(this); //this = window
                if (win.width() <= 760) {
                    $("#logoImg").css('width', '100px');
                    $('.topbar-contact').css('display', 'none');
                    if($(".contact-info")){
                        $(".contact-info").css('font-size', '16px');
                    }
                }else{
                    $("#logoImg").css('width', '140px');
                    $('.topbar-contact').css('display', 'block');
                    if($(".contact-info")){
                        $(".contact-info").css('font-size', '36px');
                    }
                }
            });
        });
        $(document).on('scroll', function() {
            if ($(document).scrollTop() > 10) {
                $("#logoImg").css('width', '100px');
            } else if($(window).width() > 760){
                $("#logoImg").css('width', '140px');
            }
        });
    </script>
</body>

</html>
