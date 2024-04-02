@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Worker Details</h1>
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">First Name</th>
                <td>{{ $worker->first_name }}</td>
            </tr>
            <tr>
                <th scope="row">Last Name</th>
                <td>{{ $worker->last_name }}</td>
            </tr>
            <tr>
                <th scope="row">Job</th>
                <td>{{ $worker->job }}</td>
            </tr>
            <tr>
                <th scope="row">Month Salary</th>
                <td>{{ $worker->month_salary }}</td>
            </tr>
            <tr>
                <th scope="row">Contract Period</th>
                <td>{{ $worker->contract_period }}</td>
            </tr>
            <tr>
                <th scope="row">Languages</th>
                <td>{{ $worker->languages }}</td>
            </tr>
            <tr>
                <th scope="row">Nationality</th>
                <td>{{ $worker->nationality }}</td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>{{ $worker->age }}</td>
            </tr>
            <tr>
                <th scope="row">Type</th>
                <td>{{ $worker->type }}</td>
            </tr>
            <tr>
                <th scope="row">Tall</th>
                <td>{{ $worker->tall }}</td>
            </tr>
            <tr>
                <th scope="row">Religion</th>
                <td>{{ $worker->religion }}</td>
            </tr>
            <tr>
                <th scope="row">Place of Birth</th>
                <td>{{ $worker->place_of_birth }}</td>
            </tr>
            <tr>
                <th scope="row">Children</th>
                <td>{{ $worker->children }}</td>
            </tr>
            <tr>
                <th scope="row">Education</th>
                <td>{{ $worker->education }}</td>
            </tr>
            <tr>
                <th scope="row">Birth Date</th>
                <td>{{ $worker->birth_date }}</td>
            </tr>
            <tr>
                <th scope="row">Weight</th>
                <td>{{ $worker->weight }}</td>
            </tr>
            <tr>
                <th scope="row">Has Practical Experience</th>
                <td>{{ $worker->has_practical_experience }}</td>
            </tr>
            <tr>
                <th scope="row">Practical Experience</th>
                <td>{{ $worker->practical_experience }}</td>
            </tr>
            <tr>
                <th scope="row">Passport Number</th>
                <td>{{ $worker->passport_number }}</td>
            </tr>
            <tr>
                <th scope="row">Passport Release Date</th>
                <td>{{ $worker->passport_release_date }}</td>
            </tr>
            <tr>
                <th scope="row">Passport End Date</th>
                <td>{{ $worker->passport_end_date }}</td>
            </tr>
            <tr>
                <th scope="row">Passport Place of Issue</th>
                <td>{{ $worker->passport_place_of_issue }}</td>
            </tr>
            <tr>
                <th scope="row">Work Experience Country</th>
                <td>{{ $worker->work_experience_country }}</td>
            </tr>
            <tr>
                <th scope="row">Years of Experience</th>
                <td>{{ $worker->years_of_experience }}</td>
            </tr>
            <tr>
                <th scope="row">Main Image</th>
                <td>{{ $worker->main_image }}</td>
            </tr>
            <tr>
                <th scope="row">Related Images</th>
                <td>{{ $worker->related_images }}</td>
            </tr>
            <tr>
                <th scope="row">CV</th>
                <td>{{ $worker->cv }}</td>
            </tr>
            <tr>
                <th scope="row">Office ID</th>
                <td>{{ $worker->office_id }}</td>
            </tr>
            <tr>
                <th scope="row">Status ID</th>
                <td>{{ $worker->status_id }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
