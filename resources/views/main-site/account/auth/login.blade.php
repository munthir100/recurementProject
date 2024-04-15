@extends('main-site.layouts.shared.app-layout')
@section('title')
@include("main-site.layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')
<header class="header-with-topbar">
    @include('main-site.layouts.shared.includes.header')
</header>
<!-- start section -->
<section class="top-space-margin half-section bg-gradient-very-light-gray">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-12 col-xl-8 col-lg-10 text-center position-relative page-title-extra-large">
                <h1 class="alt-font fw-600 text-dark-gray mb-10px">My account</h1>
            </div>
            <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                <ul>
                    <li><a href="demo-fashion-store.html">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-10 offset-xl-2 offset-lg-1 p-6 box-shadow-extra-large border-radius-6px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="fs-26 xs-fs-24 alt-font fw-600 text-dark-gray mb-20px d-block">Login to your an account</span>
                <form action="{{ route('account.login.submit') }}" method="post">
                    @csrf
                    <div class="form-group mb-20px">
                        <label class="text-dark-gray mb-10px fw-500" for="email">Email address<span class="text-red">*</span></label>
                        <input id="email" class="mb-20px bg-very-light-gray form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your email" required />
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-20px">
                        <label class="text-dark-gray mb-10px fw-500" for="password">Password<span class="text-red">*</span></label>
                        <input id="password" class="mb-20px bg-very-light-gray form-control required @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter your password" required />
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">

                        <button type="submit" class="btn btn-large btn-round-edge btn-base-color btn-hover-animation d-table d-lg-inline-block lg-mb-15px md-mx-auto">
                            <span>
                                <span class="btn-text">Login</span>
                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection