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
                            CSR
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="breadcrumbs creote">
                        <ul class="breadcrumb m-auto">
                            <li><a href="{{ route('index') }}">Home</a> </li>
                            <li class="active">CSR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content" class="site-content ">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row default_row">
            <div class="full_width_box">
                <section class="tabs_all_box  tabs_all_box_start type_three">
                    <div class="content_bx">
                        <h6 class="primary-color-one">CSR</h6>
                        <h2>Corporate Social Responsibility</h2>
                        <p>We are committed to conducting our business responsibly and ethically, with a strong focus on social, environmental, and economic sustainability. Our CSR initiatives aim to create a positive impact on communities, promote safe and fair working practices, reduce environmental footprint, and support long-term development.<br>

                            We believe that responsible business goes beyond compliance. By investing in people, protecting the environment, and contributing to community well-being, we strive to build lasting value for society while maintaining the highest standards of integrity and accountability.
                        </p>
                        <ul>
                            <li>
                                Empowering socially and economically underprivileged rural women of Kerala,India
                            </li>
                            <li>
                                Concern and commitment to the environment.
                            </li>
                            <li>
                                Empowering sustainable agriculture and development
                            </li>
                            <li>
                                Climate change mitigation.
                            </li>
                        </ul>
                    </div>
                </section>
                <!--===============spacing==============-->
                <div class="pd_bottom_80"></div>
                <!--===============spacing==============-->
            </div>
        </div>
    </div>
</div>
@endsection