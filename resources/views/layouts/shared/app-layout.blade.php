@include("layouts.shared.includes.main")

<head>
    @yield('title')
    @include("layouts.shared.includes.head-css")
    @yield('styles')
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    <div class="layout-wrapper landing">
        @include("layouts.shared.includes.main-page.navigation")
        <div class="vertical-overlay" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent.show"></div>
        @yield('content')
        @include("layouts.shared.includes.main-page.footer")
    </div>
    @include("layouts.shared.includes.vendor-scripts")
    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/landing.init.js')}}"></script>
</body>

</html>
<style>
    /*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: support@themesbrand.com
File: Custom Css File
*/
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Noto+Kufi+Arabic:wght@100..900&display=swap');

    .custom-cart-projects-title {
        height: 50px;
        overflow-y: auto;
    }

    .custom-cart-projects-text {
        height: 75px;
        overflow-y: auto;
    }

    body,
    .navbar-landing .navbar-nav .nav-item .nav-link,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    a,
    .fw-medium,
    .ff-secondary,
    .fw-semibold {
        font-family: "Noto Kufi Arabic", sans-serif !important;
        font-weight: 400 !important;
    }
</style>