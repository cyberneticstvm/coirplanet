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
About Area  
==============================-->
<div class="overflow-hidden" id="about-sec">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-xl-6">
                <div class="wow fadeInLeft">
                    <div class="img-box13">
                        <div class="img-box13_wrapp">
                            <div class="img1">
                                <img src="{{ asset('/assets/img/coirplanet/bg2-1.svg') }}" alt="About">
                                <!--<a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i></a>-->
                            </div>

                            <div class="img2">
                                <img src="{{ asset('/assets/img/coirplanet/bg2-2.svg') }}" alt="About">
                            </div>
                        </div>
                        <div class="th-experience style3">
                            <h2 class="experience-year"><span class="counter-number">5+</span></h2>
                            <p class="experience-text">Years of Services</p>
                        </div>
                        <!--<div class="about-client-box">
                            <div class="author"><img src="{{ asset('/assets/img/shape/author.png') }}" alt=""></div>
                            <span class="title">Our VIP Customer</span>
                        </div>-->
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
                        <span class="sub-title style4 text-uppercase">Who We Are</span>
                        <h2 class="sec-title mb-20">UK-Based Supplier of Natural Coir Products</h2>
                        <p class="mb-40">We are a UK based company having our manufacturing unit in Kerala, the land of coconut, a state derived its name from coconut, India. Our products are purely natural coir geotextile, organic and natural coco peat, coco pods and mulch mat.
                        </p>
                    </div>
                    <span class="sub-title style4 text-uppercase">We Value</span>
                    <div class="checklist about-checklist2">
                        <ul>
                            <li>Sustainability</li>
                            <li>Community Empowerment</li>
                            <li>Eco Innovation</li>
                            <li>Natural Excellence</li>
                            <li>Transparency</li>
                            <li>Concern for nature and people</li>
                            <li>Commitment to people and environment</li>
                            <li>Mitigation of Climate change and global boiling</li>
                        </ul>
                    </div>
                    <div class="btn-group justify-content-start">
                        <a href="{{ route('about') }}" class="th-btn">More About Us</a>
                        <div class="feature-wrapper">
                            <div class="icon-btn">
                                <a class="" href="tel:+917861726814"><i class="fa-light fa-phone"></i></a>
                            </div>
                            <div class="media-body">
                                <span class="header-info_label">Have any Question? Give us a</span>
                                <p class="header-info_link"><a href="tel:+917861726814">+91 7861726814</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-white space-top space-extra-bottom overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-content-center">
                <div class="title-area text-center"><span class="sub-title style4 text-uppercase">Our Team</span>
                    <h2 class="sec-title">The People Behind Coir Planet</h2>
                    <p>As a team we focus on contributing our expertise and experiences to build a sustainable business development model with a commitment towards environment and humanity.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-card">
                    <div class="about-card_content">
                        <h3 class="about-card_title">Dr. Sevichan P J</h3>
                        <p class="about-card_desig text-theme">Board Member</p>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i> </a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                        <p class="about-card_text">Dr Sevichan P J , an expert in the field of Coconut Husk Defibring, Coco Peat processing, Bio Fertilizers, Organic Fertilizers, and Sustainable Agriculture, is the former Associate Professor, Research Department of Botany, St.Joseph's College, Devagiri, Calicut, Kerala, India.
                            <br />Post Retirement, he started an industrial unit for coconut husk defibring for manufacturing coir products and organic fertilizers using coco peat.
                            <br />Based on his extensive research, he has developed innovative technology for manufacturing quality coir geotextile, coco pods, grow bags, organic floral foam and also low EC and neutral pH organic fertilizer from coir pith.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-card">
                    <div class="about-card_content">
                        <h3 class="about-card_title">Tomy Jacob </h3>
                        <p class="about-card_desig text-theme">Board Member</p>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i> </a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                        <p class="about-card_text">Tomy Jacob was a faculty of Social Work for over two decades in Kerala, India, since he migrated to UK in 2023. An advocate of sustainable development and eco-systems; he trusts in contributing to the progress of humanity with responsible business model. Concerned about the issues of climate change and global boiling, he functions as a district core team member of Net Zero Carbon Programme of the Government of Kerala. <br />Having very strong relationships with the grassroots organizations and empathy for the underprivileged sections of the society, he is committed to creating employment opportunities and livelihood facilities for their well-being. With the vision for an inclusive development and world, he ventures into coir products and their business which will strengthen the traditional labour sector of Kerala, the land known for high quality coir products.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-card">
                    <div class="about-card_content">
                        <h3 class="about-card_title">Madhur Bedi</h3>
                        <p class="about-card_desig text-theme">Board Member</p>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i> </a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                        <p class="about-card_text">Madhur Bedi, a British Citizen, is a business person since 2007. Having worked as an accountant in multinational companies after his studies in Accountancy and Masters in Business Administration, he started with his business in Textile import from India.
                            <br />Highly passionate in exploring innovative business plans he has experience in the field of Warehouse operations, Health Care Recruitment and Textile Manufacturing and Exports. Committed to responsible business and social development he works hard to impart all possible supports to the communities in need.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection