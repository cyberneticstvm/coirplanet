@extends("base")
@section("content")
<!--- slider-->
<section class="slider style_page_fourteen nav_position_one position-relative">
    <div class="banner_carousel owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

        <div class="slide-item-content">
            <div class="slide-item content_center">
                <div class="image-layer"
                    style="background-image:url(assets/images/sliders/9.png)">
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet
                                </h6>
                                <h1 class="animate_up">
                                    Geotextiles Manufacturer
                                </h1>
                                <p class="animate_right pd_bottom_40">
                                    Coir Planet is a UK-based company with manufacturing facilities in Kerala, India—producing 100% natural, Geotextile products for global markets.
                                </p>
                                <ul class="animate_down">
                                    <li class="theme_btn_all">
                                        <a href="{{ route('about') }}" class="theme-btn one">About Us </a>
                                    </li>
                                    <li class="theme_btn_all ">
                                        <a href="#" class="theme-btn one color_white_1">Our Products
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item-content">
            <div class="slide-item content_left">
                <div class="image-layer"
                    style="background-image:url(assets/images/sliders/6.png)">
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet
                                </h6>
                                <h1 class="animate_up">
                                    Geotextiles Manufacturer
                                </h1>
                                <p class="animate_right pd_bottom_40">
                                    Coir Planet is a UK-based company with manufacturing facilities in Kerala, India—producing 100% natural, Geotextile products for global markets.
                                </p>
                                <ul class="animate_down">
                                    <li class="theme_btn_all">
                                        <a href="{{ route('about') }}" class="theme-btn one">About Us</a>
                                    </li>
                                    <li class="theme_btn_all">
                                        <a href="#" class="theme-btn one color_white_1">Our Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item-content">
            <div class="slide-item content_center">
                <div class="image-layer"
                    style="background-image:url(assets/images/sliders/5.png)">
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 m-auto">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet
                                </h6>
                                <h1 class="animate_up">
                                    Geotextiles Manufacturer
                                </h1>
                                <p class="animate_right pd_bottom_40">
                                    Coir Planet is a UK-based company with manufacturing facilities in Kerala, India—producing 100% natural, Geotextile products for global markets.
                                </p>
                                <ul class="animate_down">
                                    <li class="theme_btn_all">
                                        <a href="{{ route('about') }}" class="theme-btn one">About Us</a>
                                    </li>
                                    <li class="theme_btn_all">
                                        <a href="#" class="theme-btn one color_white_1">Our Products</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!---slider-end--->
@endsection