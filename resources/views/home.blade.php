@extends('layouts.app')

@section('content')
    <div>
        <h1>Welcome to Home Page</h1>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('workers') }}">Workers</a></li>
            <li><a href="{{ route('callCenters') }}">Call Centers</a></li>
        </ul>
    </div>
@endsection
