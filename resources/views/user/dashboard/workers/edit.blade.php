@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Worker</h1>
    <form action="{{ route('user.dashboard.workers.update', $worker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $worker->first_name) }}">
            @error('first_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $worker->last_name) }}">
            @error('last_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" id="job" class="form-control" value="{{ old('job', $worker->job) }}">
            @error('job')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="month_salary">Month Salary</label>
            <input type="text" name="month_salary" id="month_salary" class="form-control" value="{{ old('month_salary', $worker->month_salary) }}">
            @error('month_salary')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="contract_period">Contract Period</label>
            <input type="text" name="contract_period" id="contract_period" class="form-control" value="{{ old('contract_period', $worker->contract_period) }}">
            @error('contract_period')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="languages">Languages</label>
            <input type="text" name="languages" id="languages" class="form-control" value="{{ old('languages', $worker->languages) }}">
            @error('languages')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" id="nationality" class="form-control" value="{{ old('nationality', $worker->nationality) }}">
            @error('nationality')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" id="age" class="form-control" value="{{ old('age', $worker->age) }}">
            @error('age')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $worker->type) }}">
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tall">Tall</label>
            <input type="text" name="tall" id="tall" class="form-control" value="{{ old('tall', $worker->tall) }}">
            @error('tall')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="religion">Religion</label>
            <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion', $worker->religion) }}">
            @error('religion')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="place_of_birth">Place of Birth</label>
            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" value="{{ old('place_of_birth', $worker->place_of_birth) }}">
            @error('place_of_birth')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="children">Children</label>
            <input type="text" name="children" id="children" class="form-control" value="{{ old('children', $worker->children) }}">
            @error('children')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="education">Education</label>
            <input type="text" name="education" id="education" class="form-control" value="{{ old('education', $worker->education) }}">
            @error('education')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="text" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date', $worker->birth_date) }}">
            @error('birth_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" class="form-control" value="{{ old('weight', $worker->weight) }}">
            @error('weight')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="has_practical_experience">Has Practical Experience</label>
            <input type="text" name="has_practical_experience" id="has_practical_experience" class="form-control" value="{{ old('has_practical_experience', $worker->has_practical_experience) }}">
            @error('has_practical_experience')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="practical_experience">Practical Experience</label>
            <input type="text" name="practical_experience" id="practical_experience" class="form-control" value="{{ old('practical_experience', $worker->practical_experience) }}">
            @error('practical_experience')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="passport_number">Passport Number</label>
            <input type="text" name="passport_number" id="passport_number" class="form-control" value="{{ old('passport_number', $worker->passport_number) }}">
            @error('passport_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="passport_release_date">Passport Release Date</label>
            <input type="text" name="passport_release_date" id="passport_release_date" class="form-control" value="{{ old('passport_release_date', $worker->passport_release_date) }}">
            @error('passport_release_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="passport_end_date">Passport End Date</label>
            <input type="text" name="passport_end_date" id="passport_end_date" class="form-control" value="{{ old('passport_end_date', $worker->passport_end_date) }}">
            @error('passport_end_date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="passport_place_of_issue">Passport Place of Issue</label>
            <input type="text" name="passport_place_of_issue" id="passport_place_of_issue" class="form-control" value="{{ old('passport_place_of_issue', $worker->passport_place_of_issue) }}">
            @error('passport_place_of_issue')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="work_experience_country">Work Experience Country</label>
            <input type="text" name="work_experience_country" id="work_experience_country" class="form-control" value="{{ old('work_experience_country', $worker->work_experience_country) }}">
            @error('work_experience_country')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="years_of_experience">Years of Experience</label>
            <input type="text" name="years_of_experience" id="years_of_experience" class="form-control" value="{{ old('years_of_experience', $worker->years_of_experience) }}">
            @error('years_of_experience')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- <div class="form-group">
            <label for="main_image">Main Image</label>
            <input type="text" name="main_image" id="main_image" class="form-control" value="{{ old('main_image', $worker->main_image) }}">
            @error('main_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="related_images">Related Images</label>
            <input type="text" name="related_images" id="related_images" class="form-control" value="{{ old('related_images', $worker->related_images) }}">
            @error('related_images')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> -->
        // last point is languages array type in form
        <div class="form-group">
            <label for="office_id">Office ID</label>
            <input type="text" name="office_id" id="office_id" class="form-control" value="{{ old('office_id', $worker->office_id) }}">
            @error('office_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status_id">Status ID</label>
            <input type="text" name="status_id" id="status_id" class="form-control" value="{{ old('status_id', $worker->status_id) }}">
            @error('status_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Worker</button>
        </div>
    </form>
</div>
@endsection
