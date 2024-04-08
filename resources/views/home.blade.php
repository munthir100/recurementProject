@extends('layouts.shared.app-layout')
@section('title')
@include("layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')
<style>
    /* .nft-hero {
        background-image: url("../images/nft/bg-home.jpg");
        background-size: cover;
        background-position: bottom;
        padding: 222px 0 150px 0;
    } */

    .nft-hero .bg-overlay {
        background-color: #05175f;
        opacity: 0.30;
    }
</style>
<section class="section nft-hero" id="hero" style="background-image: url('/assets/images/custom/banner.jpeg')">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10">
                <div class="text-center">
                    <h1 class="display-4 fw-medium mb-4 lh-base text-white">{{ __('Empower Your Workforce with') }} <span class="text-success">{{ __('Efficient Recruitment') }}</span></h1>
                    <p class="lead text-white lh-base mb-4 pb-2">{{ __('Welcome to our innovative recruitment platform, where we bridge the gap between talented individuals and top-tier offices and call centers. With our streamlined process, finding the perfect fit for your team has never been easier.') }}</p>

                    <div class="hstack gap-2 justify-content-center">
                        <a href="{{route('home.workers')}}" class="btn btn-primary">{{ __('Get Started') }} <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero section -->



<!-- end hero section -->

<section class="section" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Elevating Your Recruitment Experience') }}</h1>
                    <p class="text-muted">{{ __('Discover the key features that make our platform the ideal choice for efficient recruitment processes.') }}</p>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <!-- Feature: Intuitive Design -->
            <div class="col-lg-4">
                <div class="d-flex p-3">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-sm icon-effect">
                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                <i class="ri-pencil-ruler-2-line fs-36"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-18">{{ __('User-Friendly Interface') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Experience an intuitive and user-friendly interface designed to streamline your recruitment journey.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Feature: Streamlined Communication -->
            <div class="col-lg-4">
                <div class="d-flex p-3">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-sm icon-effect">
                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                <i class="ri-check-line fs-36"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-18">{{ __('Efficient Communication') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Facilitate seamless communication between offices, call centers, and applicants for effective recruitment coordination.') }}</p>
                    </div>
                </div>
            </div>

            <!-- Feature: Comprehensive Reporting -->
            <div class="col-lg-4">
                <div class="d-flex p-3">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-sm icon-effect">
                            <div class="avatar-title bg-transparent text-success rounded-circle">
                                <i class="ri-group-line fs-36"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-18">{{ __('Data-Driven Insights') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Utilize comprehensive reporting tools to gain valuable insights and optimize your recruitment strategies.') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


<!-- start services -->
<section class="section" id="process">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Streamline Your Recruitment Process with') }} <span class="text-primary">{{ __('Efficiency') }}</span> {{ __('and') }} <span class="text-primary">{{ __('Ease') }}</span></h1>
                    <p class="text-muted">{{ __('Our platform simplifies the journey for both recruiters and job seekers, ensuring a seamless experience from start to finish.') }}</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                            <div class="job-icon-effect"></div>
                            <span>1</span>
                        </h1>
                        <h6 class="fs-17 mb-2">{{ __('Explore Workers') }}</h6>
                        <p class="text-muted mb-0 fs-15">{{ __('Browse through our database of skilled workers to find the perfect match for your needs.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card shadow-none">
                    <div class="card-body p-4">
                        <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                            <div class="job-icon-effect"></div>
                            <span>2</span>
                        </h1>
                        <h6 class="fs-17 mb-2">{{ __('Select Your Worker') }}</h6>
                        <p class="text-muted mb-0 fs-15">{{ __('Choose the worker that best fits your requirements and preferences.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card shadow-none">
                    <div class="card-body p-4">
                        <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                            <div class="job-icon-effect"></div>
                            <span>3</span>
                        </h1>

                        <h6 class="fs-17 mb-2">{{ __('Select Call Center') }}</h6>
                        <p class="text-muted mb-0 fs-15">{{ __('Choose a call center from our network to handle your inquiries and requests.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card shadow-none">
                    <div class="card-body p-4">
                        <h1 class="fw-bold display-5 ff-secondary mb-4 text-success position-relative">
                            <div class="job-icon-effect"></div>
                            <span>4</span>
                        </h1>
                        <h6 class="fs-17 mb-2">{{ __('Enter Your Contact Information') }}</h6>
                        <p class="text-muted mb-0 fs-15">{{ __('Provide your contact details to the selected call center for further assistance and communication.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>



<!-- end services -->


<section class="section bg-light py-5" id="aboutUs">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6 col-sm-7 mx-auto">
                <div>
                    <img style="height:400px; border-radius:10px" src="{{asset('assets/images/custom/office-home-page.jpeg')}}" alt="" class="img-fluid mx-auto">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted">
                    <div class="avatar-sm icon-effect mb-4">
                        <div class="avatar-title bg-transparent rounded-circle text-success h1">
                            <i class="ri-collage-line fs-36"></i>
                        </div>
                    </div>
                    <h3 class="mb-3 fs-20">{{ __('Explore Our Office') }}</h3>
                    <p class="mb-4 ff-secondary fs-16">{{ __('Explore the features and functionalities of our recruitment office space. We offer a comprehensive environment tailored to streamline the recruitment process. From receiving CVs from recruitment offices to creating workers and facilitating communication between users and call centers, our platform is designed to enhance productivity and collaboration throughout the recruitment journey.') }}</p>
                    <div class="row pt-3">
                        <div class="col-3">
                            <div class="text-center">
                                <h4>5</h4>
                                <p>{{ __('Workers') }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <h4>150+</h4>
                                <p>{{ __('External Office') }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <h4>7+</h4>
                                <p>{{ __('Call Center') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>




<!-- start faqs -->
<section class="section" id="FAQ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">{{ __('Frequently Asked Questions') }}</h3>
                    <p class="text-muted mb-4 ff-secondary">{{ __('The highest international standards in recruiting domestic workers') }}</p>

                    <div class="hstack gap-2 justify-content-center">
                        <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i>{{ __('Email Us') }}</button>
                        <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i>{{ __('Send Us Tweet') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row g-lg-5 g-4">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-1">
                        <i class="ri-question-line fs-24 align-middle text-success me-1"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">{{ __('Recruiting domestic workers') }}</h5>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="project-setup-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="project-setup-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#project-setup-collapseOne" aria-expanded="false" aria-controls="project-setup-collapseOne">
                                {{ __('What are the documents required to recruit domestic workers?') }}
                            </button>
                        </h2>
                        <div id="project-setup-collapseOne" class="accordion-collapse collapse show" aria-labelledby="project-setup-headingOne" data-bs-parent="#project-setup-accordion">
                            <div class="accordion-body ff-secondary">{{ __('Original visa,Signing a recruitment contract, A copy of the national ID or residence permit for residents and Identification of salary from the employer or bank statement') }}</div>
                        </div>
                    </div>
                    <!-- Include other project setup questions here -->
                </div>
                <!--end accordion-->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="flex-shrink-0 me-1">
                        <i class="ri-shield-keyhole-line fs-24 align-middle text-success me-1"></i>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">{{ __('Task Management') }}</h5>
                    </div>
                </div>

                <div class="accordion accordion-flush" id="task-management-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="project-setup-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#project-setup-collapseOne" aria-expanded="false" aria-controls="project-setup-collapseOne">
                                {{ __('What are the documents required to recruit domestic workers?') }}
                            </button>
                        </h2>
                        <div id="project-setup-collapseOne" class="accordion-collapse collapse show" aria-labelledby="project-setup-headingOne" data-bs-parent="#project-setup-accordion">
                            <div class="accordion-body ff-secondary">{{ __('Original visa,Signing a recruitment contract, A copy of the national ID or residence permit for residents and Identification of salary from the employer or bank statement') }}</div>
                        </div>
                    </div>
                    <!-- Include other task management questions here -->
                </div>
                <!--end accordion-->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- end faqs -->

<!-- start counter -->
<section class="py-5 position-relative bg-light">
    <div class="container">
        <div class="row text-center gy-4">
            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                    <div class="text-muted">{{ __('Worker') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                    <div class="text-muted">{{ __('External Office') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                    <div class="text-muted">{{ __('CV') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                    <div class="text-muted">{{ __('Call Center') }}</div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- end counter -->



<!-- start contact -->
<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">{{ __('Get In Touch') }}</h3>
                    <p class="text-muted mb-4 ff-secondary">{{ __('We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with measurable results.') }}</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row gy-4">
            <div class="col-lg-4">
                <div>
                    <div class="mt-4">
                        <h5 class="fs-13 text-muted text-uppercase">{{ __('Office Address 1') }}:</h5>
                        <div class="ff-secondary fw-semibold">{{ __('4461 Cedar Street Moro,') }} <br />{{ __('AR 72368') }}</div>
                    </div>
                    <div class="mt-4">
                        <h5 class="fs-13 text-muted text-uppercase">{{ __('Office Address 2') }}:</h5>
                        <div class="ff-secondary fw-semibold">{{ __('2467 Swick Hill Street') }} <br />{{ __('New Orleans, LA') }}</div>
                    </div>
                    <div class="mt-4">
                        <h5 class="fs-13 text-muted text-uppercase">{{ __('Working Hours') }}:</h5>
                        <div class="ff-secondary fw-semibold">{{ __('9:00am to 6:00pm') }}</div>
                    </div>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-8">
                <div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label fs-13">{{ __('Name') }}</label>
                                    <input name="name" id="name" type="text" class="form-control bg-light border-light" placeholder="{{ __('Your name*') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="email" class="form-label fs-13">{{ __('Email') }}</label>
                                    <input name="email" id="email" type="email" class="form-control bg-light border-light" placeholder="{{ __('Your email*') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="subject" class="form-label fs-13">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control bg-light border-light" id="subject" name="subject" placeholder="{{ __('Your Subject..') }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="comments" class="form-label fs-13">{{ __('Message') }}</label>
                                    <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light" placeholder="{{ __('Your message...') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-end">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="{{ __('Send Message') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>



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