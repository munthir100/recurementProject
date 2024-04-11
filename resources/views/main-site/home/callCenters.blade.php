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
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">{{__('Find Your')}} <span class="text-primary">{{__('Worker')}}</span> {{__('You Deserve it')}}</h1>
                    <p class="text-muted">{{__('Select your support team member and enter your data to contact with you')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($callCenters as $callCenter)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-4 text-center">
                        <div class="mx-auto avatar-md mb-3">
                            <img src="https://images.vexels.com/media/users/3/135569/isolated/preview/f472ef7985f67b21212d321fdc6dbd0f-call-icon.png" alt="" class="img-fluid rounded-circle">
                        </div>
                        <h5 class="card-title mb-1">{{$callCenter->account->name}}</h5>
                        <p class="text-muted mb-0">{{$callCenter->account->email}}</p>
                        <p class="text-muted mb-0">{{$callCenter->account->phone}}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/request-call-center?worker_id={{request()->worker_id}}&call_center_id={{$callCenter->id}}" class="btn btn-outline-primary">{{__('Request Now')}}</a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
            <div class="d-flex justify-content-center">
                <x-dashboard.pagination :model="$callCenters" />
            </div>
        </div>
    </div>
</section>
@section('scripts')

@endsection
@endsection
