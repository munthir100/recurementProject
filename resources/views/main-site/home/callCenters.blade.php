@extends('main-site.layouts.shared.app-layout')
@section('title')
@include("main-site.layouts.shared.includes.title-meta", ["title" => __("Contact Us")])
@endsection
@section('content')
<header class="header-with-topbar">
    @include('main-site.layouts.shared.includes.header')
</header>
<section class="top-space-margin half-section bg-gradient-very-light-gray">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-12 col-xl-8 col-lg-10 text-center position-relative page-title-extra-large">
                <h1 class="alt-font fw-600 text-dark-gray mb-10px">About Us</h1>
            </div>
            <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                <ul>
                    <li><a href="demo-fashion-store.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section bg-very-light-gray" id="findJob">
    <div class="container-fluid bg-grey">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            @forelse ($callCenters as $callCenter)
            <div class="col text-center team-style-01 md-mb-30px">
                <figure class="mb-4 hover-box box-hover position-relative">
                    <img src="https://images.vexels.com/media/users/3/135569/isolated/preview/f472ef7985f67b21212d321fdc6dbd0f-call-icon.png" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-20px bg-white">
                        <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                            <span class="fs-18 d-block fw-600 text-dark-gray lh-26 ls-minus-05px">{{ $callCenter->account->name }}</span>
                            <p class="m-0">{{ $callCenter->account->email }}</p>
                            <p class="m-0">{{ $callCenter->account->phone }}</p>
                            <div class="social-icon hover-text mt-20px lg-mt-10px">
                                <a href="/request-call-center?worker_id={{ request()->worker_id }}&call_center_id={{ $callCenter->id }}" class="btn btn-link btn-hover-animation-switch btn-large fw-700 text-base-color d-table d-lg-inline-block xl-mb-15px md-mx-auto">
                                    <span>
                                        <span class="btn-text">Send Request</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            @empty
            <div class="alert alert-danger">
                <p class="text-alert">
                    No Items Found!
                </p>
            </div>
            @endforelse

        </div>
        <div class="d-flex justify-content-center">
            <x-main-site.pagination :model="$callCenters" />
        </div>
    </div>
</section>
@section('scripts')

@endsection
@endsection