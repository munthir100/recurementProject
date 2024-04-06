@extends('layouts.shared.app-layout')
@section('title')
@include("layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')

<section class="section pb-0 hero-section" id="hero">
    <div class="bg-overlay bg-overlay-pattern"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10">
                <div class="text-center mt-lg-5 pt-5">
                    <h1 class="display-6 fw-semibold mb-3 lh-base">{{ __('Effortless Project Management with') }} <span class="text-success">{{ __('Velzon') }}</span></h1>
                    <p class="lead text-muted lh-base">{{ __('Velzon provides a seamless experience for managing your projects, tasks, and teams. A fully responsive, multipurpose, and premium platform designed to enhance your project workflow.') }}</p>

                    <div class="d-flex gap-2 justify-content-center mt-4 mb-5">
                        <a href="#" class="btn btn-primary">{{ __('Get Started') }} <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- end hero section -->



<!-- start services -->
<section class="section" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold lh-base">{{ __('Empowering Your Project Management Journey') }}</h1>
                    <p class="text-muted">{{ __('Discover the key features that make Velzon the ideal platform for efficient project management.') }}</p>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <!-- Feature: Creative Design -->
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
                        <h5 class="fs-18">{{ __('Intuitive Design') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Enjoy an intuitive and user-friendly design that enhances your project management experience.') }}</p>
                        <div>
                            <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature: Efficient Task Management -->
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
                        <h5 class="fs-18">{{ __('Efficient Task Management') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Streamline your workflow with efficient task management features for better project coordination.') }}</p>
                        <div>
                            <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature: Collaborative Team Environment -->
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
                        <h5 class="fs-18">{{ __('Collaborative Team Environment') }}</h5>
                        <p class="text-muted my-3 ff-secondary">{{ __('Foster collaboration within your team by providing a shared and interactive project environment.') }}</p>
                        <div>
                            <a href="#" class="fs-13 fw-medium">{{ __('Learn More') }} <i class="ri-arrow-right-s-line align-bottom"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- end services -->


<!-- start features -->
<section class="section bg-light py-5" id="features">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-6 col-sm-7 mx-auto">
                <div>
                    <img src="{{asset('assets/images/landing/features/img-1.png')}}" alt="" class="img-fluid mx-auto">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-muted">
                    <div class="avatar-sm icon-effect mb-4">
                        <div class="avatar-title bg-transparent rounded-circle text-success h1">
                            <i class="ri-collage-line fs-36"></i>
                        </div>
                    </div>
                    <h3 class="mb-3 fs-20">{{ __('Comprehensive Project Widgets') }}</h3>
                    <p class="mb-4 ff-secondary fs-16">{{ __('Explore a wide range of project-specific widgets designed to enhance your project management experience. These widgets specialize in displaying essential project elements, such as tasks, timelines, and progress.') }}</p>

                    <div class="row pt-3">
                        <div class="col-3">
                            <div class="text-center">
                                <h4>5</h4>
                                <p>{{ __('Project Dashboards') }}</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <h4>150+</h4>
                                <p>{{ __('Project Pages') }}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <h4>7+</h4>
                                <p>{{ __('Functional Project Apps') }}</p>
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

<!-- end features -->



<!-- start faqs -->
<section class="section" id="FAQ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">{{ __('Frequently Asked Questions') }}</h3>
                    <p class="text-muted mb-4 ff-secondary">{{ __('If you cannot find the answer to your question in our FAQ, you can always contact us or email us. We will answer you shortly!') }}</p>

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
                        <h5 class="mb-0 fw-semibold">{{ __('Project Setup') }}</h5>
                    </div>
                </div>
                <div class="accordion accordion-flush" id="project-setup-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="project-setup-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#project-setup-collapseOne" aria-expanded="false" aria-controls="project-setup-collapseOne">
                                {{ __('How do I set up my project plan?') }}
                            </button>
                        </h2>
                        <div id="project-setup-collapseOne" class="accordion-collapse collapse show" aria-labelledby="project-setup-headingOne" data-bs-parent="#project-setup-accordion">
                            <div class="accordion-body ff-secondary">{{ __('To set up your project plan, follow the steps outlined in your project documentation. It includes details on defining project goals, milestones, tasks, and assigning responsibilities.') }}</div>
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
                        <h2 class="accordion-header" id="task-management-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#task-management-collapseOne" aria-expanded="false" aria-controls="task-management-collapseOne">
                                {{ __('How can I manage tasks within my project plan?') }}
                            </button>
                        </h2>
                        <div id="task-management-collapseOne" class="accordion-collapse collapse" aria-labelledby="task-management-headingOne" data-bs-parent="#task-management-accordion">
                            <div class="accordion-body ff-secondary">{{ __('Task management involves creating, assigning, and tracking tasks to ensure the successful execution of your project plan. Utilize project management tools and regularly update task progress.') }}</div>
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
                    <div class="text-muted">{{ __('Projects Completed') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                    <div class="text-muted">{{ __('Win Awards') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                    <div class="text-muted">{{ __('Satisfied Clients') }}</div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-3 col-6">
                <div>
                    <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                    <div class="text-muted">{{ __('Employees') }}</div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- end counter -->

<!-- start Work Process -->
<!-- start work process -->
<!-- start project workflow -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h3 class="mb-3 fw-semibold">{{ __('Our Project Workflow') }}</h3>
                    <p class="text-muted mb-4 ff-secondary">{{ __('In an ideal project scenario, understanding your requirements is key. The process begins before the design starts to ensure a seamless project experience.') }}</p>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row text-center">
            <div class="col-lg-4">
                <div class="process-card mt-4">
                    <div class="process-arrow-img d-none d-lg-block">
                        <img src="{{asset('assets/images/landing/process-arrow-img.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="avatar-sm icon-effect mx-auto mb-4">
                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                            <i class="ri-pencil-line"></i>
                        </div>
                    </div>

                    <h5>{{ __('Define Your Project') }}</h5>
                    <p class="text-muted ff-secondary">{{ __('Share details about your project, including goals and requirements, to kickstart the development process.') }}</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="process-card mt-4">
                    <div class="process-arrow-img d-none d-lg-block">
                        <img src="{{asset('assets/images/landing/process-arrow-img.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="avatar-sm icon-effect mx-auto mb-4">
                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                            <i class="ri-user-line"></i>
                        </div>
                    </div>

                    <h5>{{ __('Request a Quote') }}</h5>
                    <p class="text-muted ff-secondary">{{ __('Receive free quotes based on your project specifications. Explore options before making informed decisions.') }}</p>
                </div>
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="process-card mt-4">
                    <div class="avatar-sm icon-effect mx-auto mb-4">
                        <div class="avatar-title bg-transparent text-success rounded-circle h1">
                            <i class="ri-checkbox-circle-line"></i>
                        </div>
                    </div>

                    <h5>{{ __('Delivery Excellence') }}</h5>
                    <p class="text-muted ff-secondary">{{ __('We ensure the delivery of high-quality products that meet your expectations and project requirements.') }}</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<!-- end project workflow -->


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
                <h5 class="modal-title" id="uploadCVModalLabel">Upload Customer CV</h5>
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
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
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