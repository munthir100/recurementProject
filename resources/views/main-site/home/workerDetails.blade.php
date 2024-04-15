@extends('main-site.layouts.shared.app-layout')

@section('title')
@include("main-site.layouts.shared.includes.title-meta", ["title" => __("Worker Profile")])
@endsection
@section('content')
<header class="header-with-topbar">
    @include('main-site.layouts.shared.includes.header')
</header>

<section class="profile-section bg-very-light-gray py-5 mt-4">
    <div class="container">
        <div class="profile-header text-center mt-4 mb-4">
            <div class="avatar-lg mx-auto mb-3">
                @if($worker->getFirstMedia('cvs'))
                <img src="{{ $worker->getFirstMedia('main_images')->getUrl() }}" alt="{{ __('user-img') }}" class="img-thumbnail rounded-circle" />
                @else
                <img src="/dashboard/assets/images/users/avatar-1.jpg" alt="{{ __('user-img') }}" class="img-thumbnail rounded-circle" />
                @endif
            </div>
            <h2 class="fw-bold">{{ $worker->first_name }} {{ $worker->last_name }}</h2>
            <p class="text-muted mb-2">{{ $worker->job }}</p>
            <p class="text-muted">{{ $worker->nationality }} | {{ $worker->education }}</p>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-4 text-center">
                <h4 class="fw-bold">{{ $worker->month_salary }}</h4>
                <p>{{ __('Monthly Salary') }}</p>
            </div>
            <div class="col-md-4 text-center">
                <h4 class="fw-bold">{{ $worker->age }}</h4>
                <p>{{ __('Years Old') }}</p>
            </div>
        </div>

        <div class="profile-info card shadow-sm p-4">
            <h5 class="card-title mb-3">{{ __('Info') }}</h5>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>{{ __('Full Name') }}:</th>
                            <td>{{ $worker->first_name }} {{ $worker->last_name }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Nationality') }}:</th>
                            <td>{{ $worker->nationality }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Joining Date') }}:</th>
                            <td>{{ $worker->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Contract Period') }}:</th>
                            <td>{{ $worker->contract_period }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Type') }}:</th>
                            <td>{{ $worker->type }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Height') }}:</th>
                            <td>{{ $worker->tall }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Religion') }}:</th>
                            <td>{{ $worker->religion }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Place of Birth') }}:</th>
                            <td>{{ $worker->place_of_birth }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Children') }}:</th>
                            <td>{{ $worker->children }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Birth Date') }}:</th>
                            <td>{{ $worker->birth_date }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Weight') }}:</th>
                            <td>{{ $worker->weight }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Work Experience Country') }}:</th>
                            <td>{{ $worker->work_experience_country }}</td>
                        </tr>
                        <tr>
                            <th>{{ __('Years of Experience') }}:</th>
                            <td>{{ $worker->years_of_experience }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @if($worker->languages)
        <div class="card shadow-sm p-4 mt-4">
            <h5 class="card-title">{{ __('Languages') }}</h5>
            <div class="d-flex flex-wrap">
                @foreach(json_decode($worker->languages, true) as $language)
                <span class="badge bg-base-color mx-1">{{$language['name']}}</span>
                @endforeach
            </div>
        </div>
        @endif

        @if($worker->practical_experience)
        <div class="card shadow-sm p-4 mt-4">
            <h5 class="card-title">{{ __('Practical Experience') }}</h5>
            <div class="d-flex flex-wrap">
                @foreach(json_decode($worker->practical_experience, true) as $experience)
                <span class="badge bg-base-color mx-1">{{$experience['name']}}</span>
                @endforeach
            </div>
        </div>
        @endif
    </div>
    <div class="text-center mt-4">
        <a href="/select-call-center?worker_id={{$worker->id}}" class="btn btn-large btn-rounded btn-base-color btn-hover-animation-switch btn-icon-left d-table d-lg-inline-block lg-mb-15px md-mx-auto">
            <span>
                <span class="btn-text">Request Now</span>
                <span class="btn-icon"><i class="feather icon-feather-headphones"></i></span>
                <span class="btn-icon"><i class="feather icon-feather-shopping-bag"></i></span>
            </span>
        </a>

    </div>
</section>

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('dashboard/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/pages/profile.init.js') }}"></script>
@endsection
@endsection