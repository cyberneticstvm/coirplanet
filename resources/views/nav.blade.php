<!--==============================
	Header Area
==============================-->
<header class="th-header header-layout10 header-absolute">

    <!-- Main Menu -->
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container th-container3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('index') }}"><img src="{{ asset('/assets/img/coirplanet/cp-logo.webp') }}" width="25%" alt="Coir Planet Logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}">Products</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}">Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto ml-20">
                        <div class="header-button">
                            <a href="{{ route('contact') }}" class="th-btn">Request a quote</a>
                            <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><img src="{{ asset('/assets/img/update_4/icon/bars.svg') }}" alt="Coir Planet Side Panel Icon"></a>
                            <button class="icon-btn th-menu-toggle d-inline-block d-lg-none mobile-menu-icon"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>