@extends("base")
@section("content")
<!--- slider-->
<section class="slider style_page_fourteen nav_position_one position-relative">
    <div class="banner_carousel owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>

        <div class="slide-item-content">
            <div class="slide-item content_center">
                <div class="image-layer"
                    style='background-image:url("{{ asset("/assets/images/sliders/9.png") }}")'>
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet | Natural Fibre Eco Friendly
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
                    style='background-image:url("{{ asset("/assets/images/sliders/6.png") }}")'>
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet | Natural Fibre Eco Friendly
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
                    style='background-image:url("{{ asset("/assets/images/sliders/5.png") }}")'>
                </div>
                <div class="medium-container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 m-auto">
                            <div class="slider_content">
                                <h6 class="animate_left">
                                    Coir Planet | Natural Fibre Eco Friendly
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
<section class="feature-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            Coir
                        </div>
                        <div class="small_text_sub">Coir</div>
                        <div class="title"> What is Coir</div>
                        <p class="description_text">
                            "The versatility of coconut fiber (coir fiber and extracts) has led to its wide usage in various industries. Coir fiber has established a remarkable reputation in the horticultural, agricultural and the erosion control industries."<br>
                            Coir fiber is found between the husk and the outer shell of a coconut. The individual fiber cells are narrow and hollow, with thick walls made of cellulose. They are pale at first but are hardened later and yellowed as a layer of lignin is deposited on their walls. The high lignin content (46% by weight) of coco fibers makes it naturally resistant to mold and rot and requires zero chemical treatment.
                        </p>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('/assets/images/configuration.png') }}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">Erosion Control</a>
                        </h2>
                        <p>Coir geotextiles are natural, biodegradable mats made from coconut fibre that prevent soil erosion, stabilize slopes, and support vegetation growth.</p>
                        <a href="#" class="read_more type_two">
                            Read More <span class="icon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('/assets/images/configuration.png') }}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">Slope Protection</a>
                        </h2>
                        <p>Coir geotextiles protect slopes from erosion by reinforcing soil surfaces and supporting natural vegetation growth.</p>
                        <a href="#" class="read_more type_two">
                            Read More <span class="icon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="icon_box_new_box type_two ">
                    <span class="borders"></span>
                    <div class="icon_box">
                        <img src="{{ asset('/assets/images/configuration.png') }}" class="img-fluid svg_image"
                            alt="icon png">
                        <span class="icon_bg_rotate"></span>
                    </div>
                    <div class="content">
                        <h2>
                            <a href="#">Landscaping</a>
                        </h2>
                        <p>Coir products enhance landscaping by improving soil health, controlling weeds, and supporting healthy plant growth.</p>
                        <a href="#" class="read_more type_two">
                            Read More <span class="icon-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
</section>
<section class="about-section bg_light_1 position-relative">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="title_all_box style_seven  dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            ABOUT US
                        </div>
                        <div class="title">Welcome to the Coir Planet</div>
                        <div class="small_text_sub">About Us</div>
                        <p class="description_text">
                            <a href="{{ route('index') }}">We</a> are a UK based company having our manufacturing unit in Kerala, the land of coconuts, a state derived its name from coconut, India.
                        </p>
                        <p class="description_text">
                            Our products are purely natural coir geotextile, organic and natural coco peat, coco pods and mulch mat. We focus on strengthening sustainability through an enriched eco system. Hundred percent naturally processed coir fibres are used in making the geotextile. We thrust on empowering the socially and economically underprivileged women of the rural population of Kerala through providing them employment in the manufacturing process.
                        </p>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
                <div class="icon_carousel_box_all">
                    <div class="owl_dots_block theme_carousel owl-theme owl-carousel"
                        data-options='{"loop": true, "margin": 20, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "3" } , "1000":{ "items" : "1" }}}'>
                        <div class="icon_caro type_one">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/shooting-target.png') }}" class="img-fluid svg_image"
                                    alt="icon png" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="#">
                                        Our Mision
                                    </a>
                                </h2>
                                <p>
                                    Innovating eco-friendly coir products to uplift communities and preserving the planet for future generations
                                </p>
                                <a href="#" class="read_more type_one">
                                    Read More
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                        <div class="icon_caro type_one">
                            <div class="icon">
                                <img src="{{ asset('/assets/images/focus.png') }}" class="img-fluid svg_image"
                                    alt="icon png" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="#">
                                        Our Vision
                                    </a>
                                </h2>
                                <p>
                                    We envision a sustainable development where natural coir products enrich the planet and strengthen the communities through addressing the issues of climate change.
                                </p>
                                <a href="#" class="read_more type_one">
                                    Read More
                                    <span class="icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="image_box_new type_two clearfix pd_left_40 md_pd_left_zero">
                    <div class="image_box_inner">
                        <div class="image one">
                            <img src="{{ asset('/assets/images/about/about-8.jpg') }}" class="img-fluid" alt="img">

                            <div class="video_box video-inner text-center">
                                <a href="https://youtu.be/RN81h85V6D4" class="lightbox-image"><i
                                        class="icon-play"></i></a>
                            </div>

                            <div class="quote">
                                <p>"As a team <a href="{{ route('index') }}">we</a> focus on contributing our expertise and experiences to build a sustainable business development model with a commitment towards environment and humanity."</p>
                            </div>
                        </div>
                        <div class="image two">
                            <img src="{{ asset('/assets/images/about/about-10.jpg') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_90"></div>
    <!--===============spacing==============-->
</section>
<section class="team-section position-relative">
    <!--===============spacing==============-->
    <div class="pd_top_130"></div>
    <!--===============spacing==============-->
    <div class="large-container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="title_all_box style_seven text-center dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            <span class="icon-briefcase icon"></span>
                            Our Professionals
                        </div>
                        <div class="title">Meet our expert Team</div>
                        <div class="small_text_sub">Our Professionals</div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_top_30"></div>
                    <!--===============spacing==============-->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="team_box style_five">
                    <div class="team_box type_one">
                        <div class="content_box">
                            <h2><a href="#">Dr Sevichan P J</a></h2>
                            <h6>Research & Development Head</h6>
                            <p class="text-start">Dr Sevichan P J , an expert in the field of Coconut Husk Defibring, Coco Peat processing, Bio Fertilizers, Organic Fertilizers, and Sustainable Agriculture, is the former Associate Professor, Research Department of Botany, St.Joseph's College, Devagiri, Calicut, Kerala, India.<br>
                                Post Retirement, he started an industrial unit for coconut husk defibring for manufacturing coir products and organic fertilizers using coco peat.<br>
                                Based on his extensive research, he has developed innovative technology for manufacturing quality coir geotextile, coco pods, grow bags, organic floral foam and also low EC and neutral pH organic fertilizer from coir pith.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="team_box style_five">
                    <div class="team_box type_one">
                        <div class="content_box">
                            <h2><a href="#">Mr. Tomy Jacob </a></h2>
                            <h6>Director</h6>
                            <p class="text-start">Tomy Jacob was a faculty of Social Work for over two decades in Kerala, India, since he migrated to UK in 2023. An advocate of sustainable development and eco-systems; he trusts in contributing to the progress of humanity with responsible business model. Concerned about the issues of climate change and global boiling, he functions as a district core team member of Net Zero Carbon Programme of the Government of Kerala. Having very strong relationships with the grassroots organizations and empathy for the underprivileged sections of the society, he is committed to creating employment opportunities and livelihood facilities for their well-being.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="team_box style_five">
                    <div class="team_box type_one">
                        <div class="content_box">
                            <h2><a href="#">Mr. Madhur Bedi</a></h2>
                            <h6>Director</h6>
                            <p class="text-start">Madhur Bedi, a British Citizen, is a business person since 2007. Having worked as an accountant in multinational companies after his studies in Accountancy and Masters in Business Administration, he started with his business in Textile import from India. Highly passionate in exploring innovative business plans he has experience in the field of Warehouse operations, Health Care Recruitment and Textile Manufacturing and Exports. Committed to responsible business and social development he works hard to impart all possible supports to the communities in need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_120"></div>
    <!--===============spacing==============-->
</section>
<section class="contact-section bg_op_1 box_shadow_2"
    style='background: url("{{ asset("/assets/images/consult-bg.jpg") }}")'>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="image_box mr_top_minus_50">
                    <img src="{{ asset('/assets/images/cosnsult-image.png') }}" class="img-fluid" alt="consult" />
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <!--===============spacing==============-->
                <div class="pd_top_80"></div>
                <!--===============spacing==============-->
                <div class="title_all_box style_six  dark_color">
                    <div class="title_sections">
                        <div class="before_title">
                            <span class="icon-briefcase icon"></span>
                            ANY TIME, ANY WHERE
                        </div>
                        <div class="title">Get A Free Quote Right Now Here</div>
                        <p>We help you to see world differently , discover oppurtunities you may never
                            have imagined.</p>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_0"></div>
                <!--===============spacing==============-->
                <div class="divider_2"></div>
                <!--===============spacing==============-->
                <div class="pd_bottom_35"></div>
                <!--===============spacing==============-->
                <div class="row gutter_25px">
                    <div class="col-lg-4 col-md-12">
                        <div class="theme_btn_all color_one">
                            <a href="{{ route('contact') }}" class="theme-btn one">
                                Contact us
                            </a>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_20"></div>
                        <!--===============spacing==============-->
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="footer_contact_list dark_color type_one">
                            <div class="same_contact phone">
                                <span class="icon-telephone"></span>
                                <div class="content">
                                    <h6 class="titles"> Phone</h6>
                                    <a href="tel:+447861726814">+44 7861726814</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_60"></div>
                <!--===============spacing==============-->
            </div>
        </div>
    </div>
</section>
<section class="blog-post" id="blog">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="title_all_box style_seven text-center">
                    <div class="title_sections">
                        <div class="before_title"> <span class="icon-briefcase icon"></span> NEWS &
                            UPDATES</div>
                        <h2>Featured News and Updates</h2>
                        <div class="small_text_sub">News & Updates</div>
                        <p>As a team we focus on contributing our expertise and experiences to build a sustainable business development model with a commitment towards environment and humanity.</p>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
            </div>
        </div>
        <div class="blog_all_styles grid ">


            <div class="row">

                <div class="col-xl-4 col-md-6 col-sm-6  col-xs-12">

                    <div class="news_box type_two">
                        <div class="image_box clearfix ">
                            <div class="image_box_inner">
                                <img src="{{ asset('/assets/images/blog/blog-image-9.jpg') }}" class="img-fluid" alt="img" />
                            </div>
                            <div class="authour_details">
                                <h6><a href=""> Coir Planet </a> </h6>
                                <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                            </div>
                        </div>
                        <div class="content_inner">
                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    Why Should Business Payroll Outsourcing?
                                </a>
                            </h2>
                            <p class="short_desc">
                                How well this mistaken ideas off denouncing pleasure
                                & praisings will give you complete.
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text_box">
                                <div class="authour_details">
                                    <h6><a href=""> Coir Planet </a> </h6>
                                    <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                                </div>
                                <h2 class="entry-title"><a href="blog-single.html">
                                        Why Should Business Payroll Outsourcing?
                                    </a>
                                </h2>
                            </div>
                            <div class="bottom_content clearfix">
                                <div class="continure_reading">
                                    <a href="blog-single.html" class="read_more type_two">
                                        Read More
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="comments">
                                    <i class="icon-text"></i>
                                    <span class="Comments are Closed">Post Comment</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.col-lg-3 -->

                <div class="col-xl-4 col-md-6 col-sm-6  col-xs-12">

                    <div class="news_box type_two">
                        <div class="image_box clearfix ">
                            <div class="image_box_inner">
                                <img src="{{ asset('/assets/images/blog/blog-image-7.jpg') }}" class="img-fluid" alt="img" />
                            </div>
                            <div class="authour_details">
                                <h6><a href=""> Coir Planet </a> </h6>
                                <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                            </div>
                        </div>
                        <div class="content_inner">

                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    How to Handle Employee With Works
                                </a>
                            </h2>
                            <p class="short_desc">
                                How well this mistaken ideas off denouncing pleasure
                                & praisings will give you complete.
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text_box">
                                <div class="authour_details">
                                    <h6><a href=""> Coir Planet </a> </h6>
                                    <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">
                                        How to Handle Employee With Works
                                    </a>
                                </h2>
                            </div>
                            <div class="bottom_content clearfix">
                                <div class="continure_reading">
                                    <a href="blog-single.html" class="read_more type_two">
                                        Read More
                                        <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="comments">
                                    <i class="icon-text"></i>
                                    <span class="Comments are Closed">Comments Off </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div><!-- /.col-lg-3 -->

                <div class="col-xl-4 col-md-6 col-sm-6  col-xs-12">

                    <div class="news_box type_two">
                        <div class="image_box clearfix ">
                            <div class="image_box_inner">
                                <img src="{{ asset('/assets/images/blog/blog-image-6.jpg') }}" class="img-fluid" alt="img" />
                            </div>
                            <div class="authour_details">
                                <h6><a href=""> Coir Planet </a> </h6>
                                <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                            </div>
                        </div>
                        <div class="content_inner">

                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    Retaining Good Employees & Motivated
                                </a>
                            </h2>
                            <p class="short_desc">
                                How well this mistaken ideas off denouncing pleasure
                                & praisings will give you complete.
                            </p>
                        </div>
                        <div class="overlay">
                            <div class="text_box">
                                <div class="authour_details">
                                    <h6><a href=""> Coir Planet </a> </h6>
                                    <p> <a href="blog-single.html" rel="bookmark">{{ date('d M, Y') }}</a> </p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-single.html">
                                        Retaining Good Employees & Motivated
                                    </a>
                                </h2>
                            </div>
                            <div class="bottom_content clearfix">
                                <div class="continure_reading">
                                    <a href="blog-single.html" class="read_more type_two">
                                        Read More <span class="icon-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="comments">
                                    <i class="icon-text"></i>
                                    <span class="Comments are Closed">Comments Off </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.col-lg-3 -->
            </div>

        </div><!-- /.blog-one -->
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
</section>
@endsection