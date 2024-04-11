@include("main-site.layouts.shared.includes.main")

<head>
    @yield('title')
    @include("main-site.layouts.shared.includes.head-css")
    @yield('styles')
</head>

<body>
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include("main-site.layouts.shared.includes.footer")
        </div>
    </div>
    @include("main-site.layouts.shared.includes.vendor-scripts")
    @yield('scripts')
</body>