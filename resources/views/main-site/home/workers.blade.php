@extends('dashboard.layouts.shared.app-layout')
@section('title')
@include("dashboard.layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')
<section class="section bg-light" id="findJob">
    <div class="container-fluid bg-grey">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">{{ __('Find Your') }} <span class="text-primary">{{ __('Worker') }}</span> {{ __('You Deserve it') }}</h1>
                    <p class="text-muted">{{ __('Select your worker and contact with support team about your selected worker.') }}</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            @forelse($workers as $worker)
            <div class="col-lg-4">
                <div class="card card-body position-relative">
                    <div class="d-flex mb-4 align-items-center">
                        <div class="flex-shrink-0">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <h5 class="card-title mb-1">{{$worker->first_name}} {{$worker->last_name}}</h5>
                            <p class="text-muted mb-0">{{$worker->job}}</p>
                        </div>
                    </div>
                    <h6 class="mb-1">${{$worker->month_salary}}</h6>
                    <p class="card-text text-muted">{{$worker->nationality}}</p>
                    <div class="btn-group btn-group-md" role="group" aria-label="Basic example">
                        <a href="/select-call-center?worker_id={{$worker->id}}" class="btn btn-light">{{ __('Request Worker') }}</a>
                        <a href="{{route('home.workers.show',$worker->id)}}" class="btn btn-primary">{{ __('View Details') }}</a>
                    </div>

                    <!-- Three dots in the top right corner -->
                    <div class="position-absolute top-0 end-0 mt-2 me-2">

                        @auth('account')
                        @if(request()->user('account')->is_office_account)
                        @if($worker->office_id == request()->user('account')->office->id)
                        <form id="form{{ $worker->id }}" action="{{route('account.office.cv.deActivate',$worker->id)}}" id="form{{$worker->id}}" method="post">
                            @csrf
                            @method('put')
                        </form>
                        <button type="button" class="btn btn-outline-danger custom-toggle remove-item-btn" data-id="{{ $worker->id }}">
                            <span><i class="ri-delete-bin-line align-bottom me-1"></i> {{ __('Delete') }}</span>
                        </button>
                        @endif

                        @endif

                        @endauth
                    </div>
                </div>
            </div>

            @empty
            <div class="container">

                <div class="alert border-0 alert-danger" role="alert">
                    <strong> {{ __('No items Found') }} </strong>
                </div>
            </div>
            @endforelse

            <div class="d-flex justify-content-center">
                <x-dashboard.pagination :model="$workers" />
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{asset('dashboard/assets/js/actions/delete-items.js')}}"></script>
@endsection