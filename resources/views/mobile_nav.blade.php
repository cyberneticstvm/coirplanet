<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area">
        <div class="mobile-logo">
            <a href="{{ route('index') }}"><img src="{{ asset('/assets/img/coirplanet/cp-logo.webp') }}" width="25%" alt="Coir Planet Logo"></a>
            <div class="close-menu">
                <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="th-mobile-menu">
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
        </div>
    </div>
</div>