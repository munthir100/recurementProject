@extends('layouts.shared.dashboard.app-layout')

@section('title')
@include("layouts.shared.includes.title-meta", ["title" => __("Projects")])
@endsection

@section('page-title')
@include("layouts.shared.includes.page-title", ["pagetitle" => __("Account"), "title" => __("Projects")])
@endsection

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h1>Edit Office</h1>
                <form action="{{ route('user.dashboard.offices.update', $office->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $office->account->name) }}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $office->account->email) }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location', $office->location) }}">
                        @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Office</button>
                </form>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h1>Update Password</h1>
                <form action="{{ route('user.dashboard.offices.update.password', $office->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input required type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection