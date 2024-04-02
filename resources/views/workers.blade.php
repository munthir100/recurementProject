@extends('layouts.app')

@section('content')
<h1>List of Workers</h1>
<ul>
    @foreach ($workers as $worker)
    <li>
        <strong>Name:</strong> {{ $worker->first_name }} {{ $worker->last_name }}<br>
        <strong>Job:</strong> {{ $worker->job }}<br>
        <strong>Monthly Salary:</strong> {{ $worker->month_salary }}<br>
        <strong>Contract Period:</strong> {{ $worker->contract_period }}<br>
        <strong>Languages:</strong> {{ $worker->languages }}<br>
        <strong>Nationality:</strong> {{ $worker->nationality }}<br>
        <strong>Age:</strong> {{ $worker->age }}<br>
        <strong>Type:</strong> {{ $worker->type }}<br>
        <strong>Tall:</strong> {{ $worker->tall }}<br>
        <strong>Religion:</strong> {{ $worker->religion }}<br>
        <strong>Place of Birth:</strong> {{ $worker->place_of_birth }}<br>
        <strong>Children:</strong> {{ $worker->children }}<br>
        <strong>Education:</strong> {{ $worker->education }}<br>
        <strong>Birth Date:</strong> {{ $worker->birth_date }}<br>
        <strong>Weight:</strong> {{ $worker->weight }}<br>
        <strong>Practical Experience:</strong> {{ $worker->practical_experience }}<br>
        <strong>Passport Number:</strong> {{ $worker->passport_number }}<br>
        <strong>Passport Release Date:</strong> {{ $worker->passport_release_date }}<br>
        <strong>Passport End Date:</strong> {{ $worker->passport_end_date }}<br>
        <strong>Passport Place of Issue:</strong> {{ $worker->passport_place_of_issue }}<br>
        <strong>Work Experience Country:</strong> {{ $worker->work_experience_country }}<br>
        <strong>Years of Experience:</strong> {{ $worker->years_of_experience }}<br>
        <strong>Main Image:</strong> {{ $worker->main_image }}<br>
        <strong>Related Images:</strong> {{ $worker->related_images }}<br>
        <strong>Office ID:</strong> {{ $worker->office_id }}<br>
        <strong>Status ID:</strong> {{ $worker->status_id }}<br>
        <a href="{{ url('/select-call-center') }}?worker_id={{ $worker->id }}">Select Worker</a>

    </li>
    @endforeach
</ul>
@endsection