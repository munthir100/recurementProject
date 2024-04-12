@extends('main-site.layouts.shared.app-layout')
@section('title')
@include("main-site.layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')
<header class="header-with-topbar">
    @include('main-site.layouts.shared.includes.header')
</header>
<!-- start banner -->
<section class="top-space-margin p-0 full-screen md-h-600px sm-h-500px section-dark" data-parallax-background-ratio="0.8" style="background-image: url('/images/custom/backround.jpeg')">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-xl-7 col-md-9 col-sm-9 position-relative text-white" data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                <div class="fs-80 lh-75 sm-fs-65 fw-600 mb-20px text-shadow-large ls-minus-2px">وجهتك الاولى في
                    الاستقدام باسعار تنافسية</div>
                <div>
                    <span class="opacity-5 fs-20 w-70 md-w-85 mb-25px fw-300 d-inline-block">نلبي احتياجك من العمالة
                        المنزلية بأفضل الاسعار</span>
                </div>
                <div class="icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px rounded-circle bg-yellow me-15px rounded-box">
                            <i class="feather icon-feather-arrow-right text-dark-gray icon-extra-medium"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-7 col-md-8 col-sm-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="text-dark-gray fw-700 ls-minus-2px">مميزاتنا </h3>
                <span>تعرف اكثر علي المميزات التي ننفرد بها عن الاخرين ...
                </span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="#"><img src="/images/demo-accounting-company-icon01.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">خدمة
                            عملاء متميزة
                        </a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة

                        </p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="#"><img src="/images/demo-accounting-company-icon02.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">خدمات
                            رقمية متكاملة
                        </a>
                        <p class="mb-30px">ابدأ حجزك واتمم دفعك من خلال الموقع الالكتروني او التواصل معنا بوقت وجيز
                            وبخطوات مختصرة

                        </p>
                    </div>
                    <span class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-white border-radius-18px text-dark-gray fs-11 fw-700 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all">
                <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="#"><img src="/images/demo-accounting-company-icon03.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">مقدمي
                            الخدمة
                        </a>
                        <p class="mb-30px">يخضع مقدمي الخدمة في مكتب ترف الاعمال للفحص باستمرار من أجل خدمتكم
                            وراحتكم


                        </p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 big-section">
    <div class="container">
        <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23">
                <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                    <img src="/images/custom/side.jpeg" alt="" class="border-radius-8px w-100">
                </div>
                <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="#" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                <h3 class="fw-700 text-dark-gray ls-minus-2px" style="text-align: right !important;">مع مكتبنا</h3>
                <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100" style="text-align: right !important;">هناك
                    العديد من الاختلافات في المقاطع المتاحة ولكن الأغلبية عانت من التغيير بشكل ما من خلال كلمات
                    مضحكة لا تبدو قابلة للتصديق.</p>
                <div class="row align-items-center mb-30px xs-mb-25px justify-content-center justify-content-lg-start" style="text-align: right !important;">
                    <!-- start counter item -->
                    <div class="col-lg-5 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04 xs-mb-25px">
                        <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px" data-text="+" data-to="280"><sup class="text-yellow top-0px me-5px"><i class="feather icon-feather-users icon-very-medium"></i></sup></h3>
                        <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">فريق العمل</span>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-lg-6 col-md-4 col-sm-5 last-paragraph-no-margin counter-style-04">
                        <h3 class="vertical-counter d-inline-flex fw-700 text-dark-gray mb-0 ls-minus-2px xl-ls-minus-1px" data-text="+" data-to="465"><sup class="text-yellow top-0px me-5px"><i class="feather icon-feather-briefcase icon-very-medium"></i></sup></h3>
                        <span class="fw-500 text-dark-gray mb-10px d-block ls-minus-05px">عمالة مستقدمة</span>
                    </div>
                    <!-- end counter item -->
                </div>
                <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">دعنا
                    نتحدث<span class="bg-orient-blue text-white"><i class="feather icon-feather-arrow-right icon-small"></i></span></a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px sm-ls-minus-1px">خدماتنا</h3>
                <p>الخدمات التي نقدمها للمجتمع ...

                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon01.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">اجراءات
                            الاستقدام</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon02.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">اختيار
                            العمالة</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                    <span class="position-absolute box-shadow-large top-25px lg-top-15px right-25px lg-right-15px bg-base-color border-radius-18px text-white fs-11 fw-600 text-uppercase ps-15px pe-15px lh-26 ls-minus-05px">New</span>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon03.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">تعاقد
                            الاستقدام</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon-04.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">سياسات
                            الاستقدام</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon-05.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">استقدام
                            المنزلية</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-07 transition-inner-all">
                <div class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                    <div class="feature-box-icon">
                        <a href="demo-accounting-services-details.html"><img src="/images/demo-accounting-company-icon-06.svg" class="h-95px" alt=""></a>
                    </div>
                    <div class="feature-box-content">
                        <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">استقدام
                            العمالة</a>
                        <p class="mb-30px">نهتم في مكتب ترف الاعمال بخدمتكم عن طريق قنوات تواصل متعددة ونضمن لكم
                            خدمة متكاملة وتجربة عميل مميزة</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 bg-base-color">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-auto d-flex align-items-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="/images/custom/demo-accounting-img-05.jpg" alt="" />
                <div class="fs-19 lh-28 last-paragraph-no-margin text-white pt-15px pb-15px">
                    <p>وفر وقتك الثمين وجهدك المبذول لإيجاد حل. <a href="#" class="text-decoration-line-bottom fw-500 text-white">تواصل معنا الأن</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height" style="background-image: url(/images/custom/demo-accounting-company-04.jpg)">
    <div class="container overlap-gap-section">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px">اعلي المعايير الدولية في استقدام العمالة المنزلية
                </h3>
                <p class="w-90 lg-w-100">الاساله الاكثر شيوعا</p>
                <div class="accordion accordion-style-02 w-90 lg-w-100" id="accordion-style-02" data-active-icon="fa-chevron-up" data-inactive-icon="fa-chevron-down">
                    <!-- start accordion item -->
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-up fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">ما هي الوثائق المطلوبة لإستقدام العماله
                                        المنزلية؟
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                <p>التأشيرة الأصل</p>
                                <p>توقيع عقد إستقدام
                                </p>
                                <p>صورة الهوية الوطنية او الاقامة للمقيمين
                                </p>
                                <p>تعريف بالراتب من جهة العمل أو كشف حساب البنك
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-down fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">ما هي الوثائق لاجراءات الاستقدام؟ </span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                <p>التأشيرة الأصل
                                </p>
                                <p>توقيع عقد إستقدام
                                </p>
                                <p>صورة الهوية الوطنية او الاقامة للمقيمين
                                </p>
                                <p>تعريف بالراتب من جهة العمل أو كشف حساب البنك
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-transparent">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-chevron-down fs-15"></i><span class="fs-19 fw-600 ls-minus-05px">هل لدينا خدمة عملاء مميزة؟</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                <p>نعم نقدم خدمة عملاء 24/7 طوال اليوم والاسبوع من خلال فريق عمل متميز</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start map -->
                <div class="outside-box-right-30 position-relative">
                    <img src="/images/custom/demo-accounting-company-03.png" alt="" />
                    <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute top-100px left-100px mt-10 ms-15 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="">
                        <span>
                            <span class="video-icon">
                                <span class="bg-base-color w-100 h-100 border-radius-100 text-center d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                </span>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-red"></span>
                                    <span class="video-icon-sonar-bfr bg-yellow"></span>
                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="bg-base-color video-icon-box video-icon-medium feature-box-icon-rounded position-absolute bottom-100px start-50 mb-10 ms-7 w-40px h-40px rounded-circle d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="">
                        <span>
                            <span class="video-icon">
                                <span class="w-100 h-100 bg-base-color border-radius-100 d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-location-dot m-0 text-white icon-small"></i>
                                </span>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-red"></span>
                                    <span class="video-icon-sonar-bfr bg-yellow"></span>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
                <!-- end map -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-md-0">
    <div class="container overlap-section">
        <div class="row m-0 align-items-center justify-content-center bg-white border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large appear anime-complete" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-lg-10">
                <div class="swiper slider-one-slide testimonials-style-09" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="/images/custom/avtar-30.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="/images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">لوريم إيبسوم(Lorem Ipsum) هي الشكل وليس المحتوى) ويُستخدم في
                                        صناعات المطابع ودور النشر.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="text-align: right;">ثامر الخضيري</span>
                                    <div style="text-align: right;">استاذ</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="/images/custom/avtar-30.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="/images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">لوريم إيبسوم(Lorem Ipsum) هي الشكل وليس المحتوى) ويُستخدم في
                                        صناعات المطابع ودور النشر.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="text-align: right;">ثامر الخضيري</span>
                                    <div style="text-align: right;">دكتور</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="/images/custom/avtar-30.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative"><img src="/images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">لوريم إيبسوم(Lorem Ipsum) هي الشكل وليس المحتوى) ويُستخدم في
                                        صناعات المطابع ودور النشر.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="text-align: right;">ثامر الخضيري</span>
                                    <div style="text-align: right;">مهندس</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 md-mb-25px">
                <div class="d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray">
                        <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                    </div>
                    <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray">
                        <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h3 class="fw-700 text-dark-gray ls-minus-2px">الدول المتاحة</h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start team member item -->
            <div class="col text-center team-style-01 md-mb-30px">
                <figure class="mb-0 hover-box box-hover position-relative">
                    <img src="/images/custom/india.png" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-25px bg-white">
                        <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                        </div>
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team member item -->
            <!-- start team member item -->
            <div class="col text-center team-style-01 md-mb-30px">
                <figure class="mb-0 hover-box box-hover position-relative">
                    <img src="/images/custom/gana.png" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-25px bg-white">
                        <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                        </div>
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team member item -->
            <!-- start team member item -->
            <div class="col text-center team-style-01 xs-mb-30px">
                <figure class="mb-0 hover-box box-hover position-relative">
                    <img src="/images/custom/Philippines.jpg" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-25px bg-white">
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team member item -->
            <!-- start team member item -->
            <div class="col text-center team-style-01">
                <figure class="mb-0 hover-box box-hover position-relative">
                    <img src="/images/custom/Morocco.png" alt="" class="border-radius-6px" />
                    <figcaption class="w-100 p-30px lg-p-25px bg-white">
                        <div class="position-relative z-index-1 overflow-hidden lg-pb-5px">
                        </div>
                        <div class="box-overlay bg-white box-shadow-quadruple-large border-radius-6px"></div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team member item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0 h-280px sm-h-350px overlap-height" id="location">
    <div class="container-fluid h-100 overlap-gap-section">
        <div class="row justify-content-center h-100">
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container overlap-section overlap-section-three-fourth" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <div class="row row-cols-md-1 justify-content-center">
            <div class="col-xl-10">
                <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                    <div class="row">
                        <div class="col-9">
                            <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">كيف يمكننا
                                مساعدتك؟</h3>
                        </div>
                        <div class="col-3 text-end" data-anime='{ "translateY": [30, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>
                        </div>
                    </div>
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post" class="row contact-form-style-02">
                        <div class="col-md-6 mb-30px">
                            <input class="input-name form-control required" type="text" name="name" placeholder="الاسم" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control required" type="email" name="email" placeholder="عنوان البريد الالكتروني" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="tel" name="phone" placeholder="رقم الجوال" />
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="form-control" type="text" name="subject" placeholder="الموضوع" />
                        </div>
                        <div class="col-md-12 mb-30px">
                            <textarea class="form-control" cols="40" rows="4" name="message" placeholder="رسالتك"></textarea>
                        </div>
                        <div class="col-xl-7 col-md-7 last-paragraph-no-margin">
                            <p class="text-center text-md-end fs-15 lh-26">ونحن ملتزمون بحماية خصوصيتك. لن نقوم
                                أبدًا بجمع معلومات عنك دون موافقتك الصريحة.</p>
                        </div>
                        <div class="col-xl-5 col-md-5 text-center text-md-end sm-mt-20px">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow submit" type="submit">ارسل الرسالة</button>
                        </div>
                        <div class="col-12">
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
            <div class="row align-items-center justify-content-center mt-8">
                <div class="col-md-auto text-center text-md-end sm-mb-20px">
                    <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">تواصل معنا عبر وسائل التواصل الاجتماعي </h6>
                </div>
                <div class="col-2 d-none d-lg-inline-block">
                    <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                </div>
                <!-- start social icon -->
                <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                    <ul class="large-icon dark">
                        <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <li class="m-0"><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i><span></span></a></li>
                        <li class="m-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                        <li class="m-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                    </ul>
                </div>
                <!-- end social icon -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="half-section">
    <div class="container">
        <div class="row justify-content-center mb-30px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-lg-5 text-center mb-15px">
                <span class="text-dark-gray fw-600 fs-16 ls-minus-05px text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">انضم
                    إلى أكثر من 10000 عميل يستخدمون مكتبنا</span>
            </div>
        </div>
        <div class="row position-relative clients-style-08 mb-35px" data-anime='{"translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-logitech-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-netflix-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-invision-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-yahoo-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-walmart-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="/images/logo-logitech-oxford-blue.svg" class="h-40px xs-h-30px" alt="" /></a>
                    </div>
                    <!-- end client item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->



<div class="modal fade" id="uploadCVModal" tabindex="-1" aria-labelledby="uploadCVModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadCVModalLabel">{{ __('Upload Customer CV')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('account.office.cv.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">

                        <div class="col-xxl-6">
                            <input type="file" class="form-control" id="cv" name="cv">
                            @error('cv')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                        </div>

                        <div class="col-lg-12 align-items-center">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('Close')}}</button>
                                <button type="submit" class="btn btn-primary">{{ __('Submit')}}</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection