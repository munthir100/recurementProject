@extends('layouts.app')

@section('content')
<h1>List of Call Centers</h1>
<ul>
    @foreach ($callCenters as $callCenter)
    <li>
        <strong>Name:</strong> {{ $callCenter->account->name }}<br>
        <strong>Email:</strong> {{ $callCenter->account->email }}<br>
        <strong>Phone:</strong> {{ $callCenter->account->phone }}<br>
        <a href="{{ url('/request-call-center') }}?worker_id={{ request()->get('worker_id') }}&call_center_id={{$callCenter->id}}">Select call center</a>


    </li>
    @endforeach
</ul>
@endsection