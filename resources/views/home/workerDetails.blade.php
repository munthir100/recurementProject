@extends('layouts.shared.app-layout')
@section('title')
@include("layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')

<div class="container-fluid">
    <section class="section">
        <div class="container-fluid">
            <div id="layout-wrapper">
                <div class="main-content m-0">
                    <div class="page-content">
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="/assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        @if($worker->getFirstMedia('cvs'))
                                        <img src="{{ $worker->getFirstMedia('main_images')->getUrl() }}" alt="{{ __('user-img') }}" class="img-thumbnail rounded-circle" />
                                        @else
                                        <img src="/assets/images/users/avatar-1.jpg" alt="{{ __('user-img') }}" class="img-thumbnail rounded-circle" />
                                        @endif
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h3 class="text-white mb-1">{{ $worker->first_name }} {{ $worker->last_name }}</h3>
                                        <p class="text-white text-opacity-75">{{ $worker->job }}</p>
                                        <div class="hstack text-white-50 gap-1">
                                            <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $worker->nationality }}</div>
                                            <div>
                                                <i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $worker->education }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12 col-lg-auto order-last order-lg-0">
                                    <div class="row text text-white-50 text-center">
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">{{ $worker->month_salary }}</h4>
                                                <p class="fs-14 mb-0">{{ __('Month Salary') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">{{ $worker->age }}</h4>
                                                <p class="fs-14 mb-0">{{ __('Years Old') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">{{ __('Info') }}</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Full Name :') }}</th>
                                                                            <td class="text-muted">{{ $worker->first_name }} {{ $worker->last_name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Nationality :') }}</th>
                                                                            <td class="text-muted">{{ $worker->nationality }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Joining Date') }}</th>
                                                                            <td class="text-muted">{{ $worker->created_at->diffForHumans() }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Contract Period :') }}</th>
                                                                            <td class="text-muted">{{ $worker->contract_period }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Type :') }}</th>
                                                                            <td class="text-muted">{{ $worker->type }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Tall :') }}</th>
                                                                            <td class="text-muted">{{ $worker->tall }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Religion :') }}</th>
                                                                            <td class="text-muted">{{ $worker->religion }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Place of Birth :') }}</th>
                                                                            <td class="text-muted">{{ $worker->place_of_birth }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Children :') }}</th>
                                                                            <td class="text-muted">{{ $worker->children }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Birth Date :') }}</th>
                                                                            <td class="text-muted">{{ $worker->birth_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Weight :') }}</th>
                                                                            <td class="text-muted">{{ $worker->weight }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Work Experience Country :') }}</th>
                                                                            <td class="text-muted">{{ $worker->work_experience_country }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">{{ __('Years of Experience :') }}</th>
                                                                            <td class="text-muted">{{ $worker->years_of_experience }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->

                                                    @if($worker->languages)
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">{{ __('Languages') }}</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                @foreach(json_decode($worker->languages, true) as $language)
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">{{$language['name']}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                    @endif

                                                    @if($worker->practical_experience)
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">{{ __('Practical Experience') }}</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                @foreach(json_decode($worker->practical_experience, true) as $experience)
                                                                <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">{{$experience['name']}}</a>
                                                                @endforeach
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
                                                    @endif
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div><!-- container-fluid -->
                </div><!-- End Page-content -->
            </div>
        </div>

    </section>





    @section('styles')
    <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}">
    @endsection
    @section('scripts')
    <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/profile.init.js')}}"></script>
    @endsection
    @endsection