<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <meta name="author" content="Cybernetics">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/assets/img/favicons/apple-icon-60x60.png') }}') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/img/favicons/apple-icon-72x72.png') }}') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/assets/img/favicons/apple-icon-76x76.png') }}') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/img/favicons/apple-icon-114x114.png') }}') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/assets/img/favicons/apple-icon-120x120.png') }}') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/assets/img/favicons/apple-icon-144x144.png') }}') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/assets/img/favicons/apple-icon-152x152.png') }}') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/img/favicons/apple-icon-180x180.png') }}') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/assets/img/favicons/android-icon-192x192.png') }}') }}">
    <link rel="icon" type="image/png') }}" sizes="144x144" href="{{ asset('/assets/img/favicons/android-icon-144x144.png') }}">
    <link rel="icon" type="image/png') }}" sizes="32x32" href="{{ asset('/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png') }}" sizes="96x96" href="{{ asset('/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png') }}" sizes="16x16" href="{{ asset('/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/assets/img/favicons/ms-icon-144x144.png') }}') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&family=Outfit:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->



    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    @include("mobile_nav")
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block ">
        <div class="sidemenu-content bg-black2">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('/assets/img/coirplanet/cp-logo.webp') }}" alt="Coir Planet Logo" width="25%"></a>
                    </div>
                    <p class="about-text">UK-based Coir Planet supplies 100% natural coir geotextiles, organic coco peat, and eco-friendly coir products from Kerala, India.</p>

                    <div class="th-social  footer-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <!--<div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('/assets/img/blog/recent-post-2-1.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Installation of new Equipment</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>12 Oct, 2025</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            <div class="widget footer-widget">
                <h4 class="widget_title">Newsletter</h4>
                <div class="newsletter-widget">
                    <p class="md-10">Sign Up to get updates & news about us. Get Latest news from Coir Planet to your mail address.</p>
                    <div class="footer-search-contact mt-25">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter your email">
                        </form>
                        <div class="footer-btn mt-10">
                            <button type="submit" class="th-btn style4 fw-btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("nav")
    @yield("content")
    <!--==============================
			Footer Area
==============================-->
    <footer class="footer-wrapper footer-layout6" data-bg-src="{{ asset('/assets/img/update_3/bg/footer_bg_1.jpg') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('index') }}"><img src="{{ asset('/assets/img/coirplanet/cp-logo.webp') }}" width="25%" alt="Coir Planet Logo"></a>
                                </div>
                                <p class="about-text">UK-based Coir Planet supplies 100% natural coir geotextiles, organic coco peat, and eco-friendly coir products from Kerala, India.</p>

                                <div class="th-social  footer-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-2">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Quick links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('index') }}">Testimonials</a></li>
                                    <li><a href="{{ route('index') }}">Gallery</a></li>
                                    <li><a href="{{ route('index') }}">Blogs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Products</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Coir Geotextile</a></li>
                                    <li><a href="#">Mulch Mat</a></li>
                                    <li><a href="#">Coco Peat</a></li>
                                    <li><a href="#">Coco Pods</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="th-widget-about">
                                <p class="footer-info"><i class="fas fa-map-marker-alt"></i>Coir Planet, Bldg. No.592, Kanjikuzhi GP Ward IX, Near Luther Junction, Muhamma PO, Alappuzha 688525, Kerala, India</p>
                                <div class="footer-info"> <i class="fa-solid fa-phone"></i>
                                    <p class="footer-info_text">
                                        <a href="tel:+917861726814" class="text-inherit">+91 7861726814</a>
                                    </p>
                                </div>
                                <p class="footer-info"><i class="fas fa-envelope"></i><a class="text-inherit" href="mailto:mail@coirplanet.com">mail@coirplanet.com</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <p class="copyright-text text-white text-center">Copyright © {{ date('Y') }} <a href="https://coirplanet.com">Coirplanet</a>. All Rights
                            Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation-bubble style4">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
        </div>
    </footer>



    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('/assets/js/jquery-ui.min.js') }}"></script>
    <!-- imagesloaded  -->
    <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- odometer -->
    <script src="{{ asset('/assets/js/odometer.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/assets/js/nice-select.min.js') }}"></script>

    <!-- circle-progress -->
    <script src="{{ asset('/assets/js/circle-progress.js') }}"></script>

    <script src="{{ asset('/assets/js/jquery.ripples.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>