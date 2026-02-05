@extends("base")
@section("content")
<div class="page_header_default style_one ">
    <div class="parallax_cover">
        <img src="{{ asset('/assets/images/page-header-default.svg') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            About Us
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('index') }}">Home</a> </li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12 ">
                <div class="about_content position-relative z_99">
                    <div class="title_all_box style_one text-left  dark_color">
                        <div class="title_sections">
                            <div class="before_title">Who We are</div>
                            <h2>Leaders in Geotextile Manufacturing</h2>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="extra_content image_with_content dark_color">
                        <div class="simple_image">
                            <img src="assets/images/cuntry-1.png" alt="img">
                            <h2> Since 2025, <br> Operating in UK.</h2>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                    <div class="description_box">
                        <p>We are a UK based company having our manufacturing unit in Kerala, the land of coconut, a state derived its name from coconut, India. Our products are purely natural coir geotextile, organic and natural coco peat, coco pods and mulch mat. We focus on strengthening sustainability through an enriched eco system. Hundred percent naturally processed coir fibres are used in making the geotextile. We thrust on empowering the socially and economically underprivileged women of the rural population of Kerala through providing them employment in the manufacturing process. </p>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_25"></div>
                    <!--===============spacing==============-->
                    <div class="theme_btn_all color_one">
                        <a href="{{ route('contact') }}" target="_blank" rel="nofollow" class="theme-btn five">Contact us<i
                                class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="image_boxes style_two">
                    <img src="{{ asset('/assets/images/shape-1.png') }}" class="background_image" alt="image">
                    <div class="image one">
                        <img src="{{ asset('/assets/images/about/about-6.png') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="image two">
                        <img src="{{ asset('/assets/images/about/about-7.png') }}" class="img-fluid" alt="image">
                    </div>
                    <div class="authour_quotes">
                        <i class="icon-quote"></i>
                        <h6 class="fst-italic">"You must be the change you wish to see in the world"</h6>
                        <p>Mahatma Gandhi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_70"></div>
    <!--===============spacing==============-->
</section>
<section class="service-icon-section bg_light_1">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_one text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">Our Business</div>
                        <h2 class="title">Stand Out From The Rest</h2>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="simple_image_boxes parallax_cover height_264px">
                    <img src="{{ asset('/assets/images/icon-img-ab-1.jpg') }}" class="simp_img cover-parallax" alt="image">
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
                <div class="icon_box_all style_three">
                    <div class="icon_content ">
                        <div class="icon">
                            <span class=" icon-bow-and-arrow"></span>
                        </div>
                        <div class="txt_content">
                            <h3><a href="#" target="_blank" rel="nofollow">Our Mission</a></h3>
                            <p>Innovating eco-friendly coir products to uplift communities and preserving the planet for future generations </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-0 mt-xl-0">
                <div class="icon_box_all style_three">
                    <div class="icon_content ">
                        <div class="icon">
                            <span class=" icon-growth"></span>
                        </div>
                        <div class="txt_content">
                            <h3><a href="#" target="_blank" rel="nofollow">Our Core Values</a></h3>
                            <p>We are committed to delivering superior quality in our products, services, and workmanship.</p>
                            <ul>
                                <li>Sustainability</li>
                                <li>Community Empowerment</li>
                                <li>Eco Innovation</li>
                                <li>Natural Excellence</li>
                                <li>Transparency </li>
                                <li>Concern for nature and people</li>
                                <li>Commitment to people and environment</li>
                                <li>Mitigation of Climate change and global boiling</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-4 mt-lg-4 mt-xl-0">
                <div class="icon_box_all style_three">
                    <div class="icon_content ">
                        <div class="icon">
                            <span class=" icon-binoculars"></span>
                        </div>
                        <div class="txt_content">
                            <h3><a href="#" target="_blank" rel="nofollow">Our Vision</a></h3>
                            <p>We envision a sustainable development where natural coir products enrich the planet and strengthen the communities through addressing the issues of climate change. </p>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
                <div class="simple_image_boxes  height_264px">
                    <img src="{{ asset('/assets/images/icon-img-ab-2.jpg') }}" class="simp_img img-fluid" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
</section>
<div id="content" class="site-content ">
    <div class="container">
        <div class="row default_row">
            <div class="full_width_box">
                <section class="creote-progress">
                    <!--===============spacing==============-->
                    <div class="pd_top_80"></div>
                    <!--===============spacing==============-->
                    <div class="row">
                        <h3 class="mb-5 text-center primary-color-one">Our Thrust Areas</h3>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Coir Geotextile for Erosion Control</a></h3>
                                    <p>Coir geotextiles are natural, biodegradable mats made from coconut fibre that prevent soil erosion, stabilize slopes, and support vegetation growth.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Ground/Soil Stabilisation</a></h3>
                                    <p>Natural coir geotextiles strengthen soil structure, reduce surface movement, and improve ground stability in erosion-prone areas.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Slope Protection</a></h3>
                                    <p>Coir geotextiles protect slopes from erosion by reinforcing soil surfaces and supporting natural vegetation growth.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Water Management</a></h3>
                                    <p>Coir products improve water management by enhancing moisture retention, reducing runoff, and supporting natural drainage.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Landscaping</a></h3>
                                    <p>Coir products enhance landscaping by improving soil health, controlling weeds, and supporting healthy plant growth.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Coastal Defence</a></h3>
                                    <p>Coir geotextiles protect coastlines by reducing erosion, stabilizing shorelines, and supporting natural vegetation growth.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Construction and Infrastructure Development</a></h3>
                                    <p>Coir geotextiles support construction and infrastructure projects by stabilizing soil, preventing erosion, and enhancing long-term ground performance.</p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4 mb-lg-0">
                            <div class="content_box_cn style_one">
                                <div class="txt_content">
                                    <h3><a href="#" target="_blank" rel="nofollow">Other</a></h3>
                                    <p>Mulch Mat, Coco peat and coco pods for Sustainable Agriculture and Horticulture </p>
                                </div>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_50"></div>
                    <!--===============spacing==============-->
                </section>
            </div>
        </div>
    </div>
</div>
@endsection