@extends('main-site.layouts.shared.app-layout')
@section('title')
@include("main-site.layouts.shared.includes.title-meta", ["title" => __("Contact Us")])
@endsection
@section('content')
<header class="header-with-topbar">
    @include('main-site.layouts.shared.includes.header')
</header>
<!-- start page title -->
<section class="top-space-margin half-section bg-gradient-very-light-gray">
    <div class="container">
        <div class="row align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col-12 col-xl-8 col-lg-10 text-center position-relative page-title-extra-large">
                <h1 class="alt-font fw-600 text-dark-gray mb-10px">Request</h1>
            </div>
            <div class="col-12 breadcrumb breadcrumb-style-01 d-flex justify-content-center">
                <ul>
                    <li><a href="demo-fashion-store.html">Home</a></li>
                    <li>Workers</li>
                    <li>Request</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<section class="position-relative">
    <div class="container">
        <div class="row row-cols-md-1 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 300, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-lg-6 offset-xxl-1" style="">
                <!-- start contact form -->
                <form action="{{ route('home.inquiryRequest.store', ['worker_id' => request()->get('worker_id'), 'call_center_id' => request()->get('call_center_id')]) }}" method="post" class="contact-form-style-03">
                    @csrf
                    <input type="hidden" name="worker_id" value="{{ request()->worker_id }}">
                    <input type="hidden" name="call_center_id" value="{{ request()->call_center_id }}">

                    <div class="row justify-content-center">
                        <!-- Name Field -->
                        <div class="col-md-12 xs-mb-30px">
                            <label for="name" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">{{ __('Name') }}</label>
                            <div class="position-relative form-group mb-25px xs-mb-0">
                                <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                <input id="name" type="text" class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control @error('name') is-invalid @enderror" name="name" placeholder="What's your good name?" value="{{ old('name') }}" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-12 xs-mb-30px">
                            <label for="email" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">{{ __('Email') }}</label>
                            <div class="position-relative form-group mb-25px xs-mb-0">
                                <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                <input id="email" type="email" class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email address" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone Field -->
                        <div class="col-md-12 xs-mb-30px">
                            <label for="phone" class="form-label fw-700 text-dark-gray text-uppercase fs-13 ls-05px mb-0">{{ __('Phone') }}</label>
                            <div class="position-relative form-group mb-25px xs-mb-0">
                                <span class="form-icon"><i class="bi bi-telephone text-dark-gray"></i></span>
                                <input id="phone" type="tel" class="ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}" required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-base-color btn-switch-text btn-large left-icon btn-round-edge text-transform-none" type="submit">
                                <span>
                                    <span><i class="bi bi-bag-check"></i></span>
                                    <span class="btn-double-text" data-text="Send Request Now">
                                        &nbsp;
                                        &nbsp;Send Request Now
                                    </span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- end contact form -->
            </div>
        </div>
    </div>
</section>
@endsection