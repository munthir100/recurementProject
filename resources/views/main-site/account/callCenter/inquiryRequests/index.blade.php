@extends('dashboard.layouts.shared.app-layout')
@section('title')
@include("dashboard.layouts.shared.includes.title-meta", ["title" => __("Home")])
@endsection
@section('content')
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h1 class="mb-3 ff-secondary fw-semibold text-capitalize lh-base">{{ __('Contact Users With Via There Emails Or Phone Numbers') }}</h1>
                    <p class="text-muted">{{ __('After contact with user and deal with him you can delete the inquiry requests from here.') }}</p>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">

            <div class="card">
                <div class="card-body">

                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-striped-columns mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">{{ __('ID') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Phone') }}</th>
                                    <th scope="col">{{ __('Worker') }}</th>
                                    <th scope="col">{{ __('Created At') }}</th>
                                    <th scope="col">{{ __('Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($inquiryRequests as $inquiryRequest)
                                <form id="form{{ $inquiryRequest->id }}" action="{{ route('account.callCenter.inquiryRequests.destroy', $inquiryRequest->id) }}" method="post" class="hidden">
                                    @csrf
                                    @method('delete')
                                </form>
                                <tr>
                                    <td>
                                        <a href="#" class="fw-semibold">{{ $inquiryRequest->id }}</a>
                                    </td>
                                    <td>{{ $inquiryRequest->name }}</td>
                                    <td>
                                        <a href="mailTo:{{ $inquiryRequest->email }}">
                                            {{ $inquiryRequest->email }}
                                        </a>

                                    </td>
                                    <td>{{ $inquiryRequest->phone }}</td>

                                    <td>
                                        <a href="{{route('home.workers.show',$inquiryRequest->worker->id)}}" target="__blank">
                                            {{ $inquiryRequest->worker->first_name }} {{ $inquiryRequest->worker->first_name }}
                                        </a>
                                    </td>
                                    <td>{{ $inquiryRequest->created_at->diffForHumans() }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger remove-item-btn" data-id="{{ $inquiryRequest->id }}">
                                            <i class="ri-delete-bin-5-line"></i> {{ __('Delete') }}
                                        </button>
                                    </td>
                                </tr>
                                @empty
                            </tbody>

                            <tr>
                                <th colspan="7" class="text-center">{{ __("No items found!") }}</th>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection


<script src="{{ asset('dashboard/assets/libs/prismjs/prism.js') }}"></script>

<script src="{{ asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{asset('dashboard/assets/js/actions/delete-items.js')}}"></script>