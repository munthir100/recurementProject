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