@extends("base")
@section("content")
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper  hero-12">
    <div class="hero-slider-12" data-bg-src="{{ asset('/assets/img/coirplanet/coir-planet-bg1.svg') }}">
        <div class="th-carousel number-dots" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true">

            <div class="th-hero-slide">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-8">
                            <div class="hero-style12">
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Coir Planet</span>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">
                                    Natural Coir Geotextiles & Coco Peat Manufacturer | Coir Planet UK</h1>
                                <p class="text-dark" data-ani="slideinup" data-ani-delay="0.5s">Coir Planet is a UK-based company with manufacturing facilities in Kerala, India—producing 100% natural, biodegradable coir products for global markets.</p>
                                <div class="btn-group  justify-content-center justify-content-xl-start" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('contact') }}" class="th-btn">Contact Us </a>
                                    <a href="{{ route('about') }}" class="th-btn th-border2">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.4s">
                                <img src="{{ asset('/assets/img/coirplanet/bg1-1.svg') }}" alt="Coir Planet Background">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-hero-slide">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-8">
                            <div class="hero-style12">
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Coir Planet</span>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">
                                    Sustainable Coir Products from Kerala, India</h1>
                                <p class="text-dark" data-ani="slideinup" data-ani-delay="0.5s">Regular We produce eco-friendly coir products using naturally processed coconut fibre while supporting sustainable ecosystems and rural livelihoods.</p>
                                <div class="btn-group  justify-content-center justify-content-xl-start" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('contact') }}" class="th-btn">Contact Us </a>
                                    <a href="{{ route('about') }}" class="th-btn th-border2">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="th-hero-img" data-ani="slideinup" data-ani-delay="0.4s">
                                <img src="{{ asset('/assets/img/coirplanet/bg1-2.svg') }}" alt="Coir Planet Background">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="th-hero-slide">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-8">
                            <div class="hero-style12">
                                <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Coir Planet</span>
                                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">
                                    Biodegradable Coir Materials for a Sustainable Ecosystem</h1>
                                <p class="text-dark" data-ani="slideinup" data-ani-delay="0.5s">Regular Supporting soil conservation, water retention, and green infrastructure through natural fibres.</p>
                                <div class="btn-group  justify-content-center justify-content-xl-start" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{ route('contact') }}" class="th-btn">Contact Us </a>
                                    <a href="{{ route('about') }}" class="th-btn th-border2">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="" data-ani="slideinup" data-ani-delay="0.4s">
                                <img src="{{ asset('/assets/img/coirplanet/hero_bg_5_3.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down"><a href="#about-sec" class="">
            <span class="hero-scroll-wrap spin"><img src="{{ asset('/assets/img/shape/shape.png') }}" alt=""></span>
            <span><img src="{{ asset('/assets/img/shape/scroll.png') }}" alt=""></span>
        </a>
    </div>
</div>

<!--======== / Hero Section ========-->
<!--==============================
Brand Area  
==============================-->
<!--<div class="overflow-hidden ">
    <div class="container">
        <div class="title-area text-center">
            <span class="brand-title">
                <span class="counter-card_number"><span class="counter-number">10</span>k+<span class="counter-title">Our Trusted Partner</span></span>
            </span>
        </div>
        <div class="row brand-slide th-carousel" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="{{ asset('/assets/img/brand/brand_1_1.png') }}" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="{{ asset('/assets/img/brand/brand_1_2.png') }}" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="{{ asset('/assets/img/brand/brand_1_3.png') }}" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="{{ asset('/assets/img/brand/brand_1_4.png') }}" alt="Brand Logo">
            </div>
            <div class="col-auto brand-img style2  wow fadeInLeft">
                <img src="{{ asset('/assets/img/brand/brand_1_5.png') }}" alt="Brand Logo">
            </div>
        </div>
    </div>
</div>-->
<!--==============================
About Area  
==============================-->
<!--<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="img-box13">
                        <div class="img-box13_wrapp">
                            <div class="img1">
                                <img src="{{ asset('/assets/img/normal/about_5_1.jpg') }}" alt="About">
                                <a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i></a>
                            </div>

                            <div class="img2">
                                <img src="{{ asset('/assets/img/normal/about_5_2.jpg') }}" alt="About">
                            </div>
                        </div>
                        <div class="th-experience style3">
                            <h2 class="experience-year"><span class="counter-number">25</span></h2>
                            <p class="experience-text">Years Experience</p>
                        </div>
                        <div class="about-client-box">
                            <div class="author"><img src="{{ asset('/assets/img/shape/author.png') }}" alt=""></div>
                            <span class="title">Our VIP Customer</span>
                        </div>
                        <div class="shape-mockup movingX" data-top="10%" data-left="-10%"><img src="{{ asset('/assets/img/shape/dots.png') }}" alt="shape">
                        </div>
                        <div class="shape-mockup spin" data-top="-2%" data-right="20%"><img src="{{ asset('/assets/img/shape/circle.png') }}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight">
                <div class="ps-xl-4">
                    <div class="title-area mb-25">
                        <span class="sub-title style4 text-uppercase"><img src="{{ asset('/assets/img/theme-img/title_left.svg') }}" alt="shape">About
                            Poolax</span>
                        <h2 class="sec-title mb-20">We Are Professionals in Cleaning Swimming Pools</h2>
                        <p class="mb-40">Our team consists of certified technician with a wealth of experience in pool
                            maintenance and servicing. We stay updated on the latest industry trends and best practices.
                        </p>
                    </div>
                    <div class="checklist about-checklist2">
                        <ul>
                            <li>Experienced Professionals</li>
                            <li>Satisfaction Guaranteed</li>
                            <li>Eco-Friendly Products</li>
                            <li>Comprehensive Cleaning</li>
                            <li>Flexible Scheduling</li>
                            <li>Professional Team</li>
                        </ul>
                    </div>
                    <div class="btn-group justify-content-start">
                        <a href="about.html" class="th-btn">More About Us</a>
                        <div class="feature-wrapper">
                            <div class="icon-btn">
                                <a class="" href="tel:+46825476243"><i class="fa-light fa-phone"></i></a>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Have any Question? Give us a</span>
                                <p class="header-info_link"><a href="tel:+16396548745">+163 9654 8745</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection