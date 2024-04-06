@extends('layouts.shared.dashboard.app-layout')

@section('title')
@include("layouts.shared.includes.title-meta", ["title" => __("Projects")])
@endsection

@section('page-title')
@include("layouts.shared.includes.page-title", ["pagetitle" => __("Account"), "title" => __("Projects")])
@endsection

@section('styles')
@endsection
@section('content')
<div class="row">
    <div class="card">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('user.dashboard.workers.update', $worker->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your firstname" value="{{ old('first_name', $worker->first_name) }}">
                            <label for="first_name">First Name</label>
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your lastname" value="{{ old('last_name', $worker->last_name) }}">
                            <label for="last_name">Last Name</label>
                            @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="job" id="job" class="form-control" placeholder="Enter your job" value="{{ old('job', $worker->job) }}">
                            <label for="job">Job</label>
                            @error('job')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>



                <div class="row mb-2">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="month_salary" id="month_salary" class="form-control" placeholder="Enter month salary" value="{{ old('month_salary', $worker->month_salary) }}">
                            <label for="month_salary">Month Salary</label>
                            @error('month_salary')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="contract_period" id="contract_period" class="form-control" placeholder="Enter contract period" value="{{ old('contract_period', $worker->contract_period) }}">
                            <label for="contract_period">Contract Period</label>
                            @error('contract_period')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="years_of_experience" id="years_of_experience" class="form-control" placeholder="Enter years of experience" value="{{ old('years_of_experience', $worker->years_of_experience) }}">
                            <label for="years_of_experience">Years of Experience</label>
                            @error('years_of_experience')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>




                </div>

                <div class="row mb-2">
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Enter nationality" value="{{ old('nationality', $worker->nationality) }}">
                            <label for="nationality">Nationality</label>
                            @error('nationality')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="age" id="age" class="form-control" placeholder="Enter age" value="{{ old('age', $worker->age) }}">
                            <label for="age">Age</label>
                            @error('age')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="type" id="type" class="form-control" placeholder="Enter type" value="{{ old('type', $worker->type) }}">
                            <label for="type">Type</label>
                            @error('type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="tall" id="tall" class="form-control" placeholder="Enter tall" value="{{ old('tall', $worker->tall) }}">
                            <label for="tall">Tall</label>
                            @error('tall')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="religion" id="religion" class="form-control" placeholder="Enter religion" value="{{ old('religion', $worker->religion) }}">
                            <label for="religion">Religion</label>
                            @error('religion')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" placeholder="Enter place of birth" value="{{ old('place_of_birth', $worker->place_of_birth) }}">
                            <label for="place_of_birth">Place of Birth</label>
                            @error('place_of_birth')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row mb-2">
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="children" id="children" class="form-control" placeholder="Enter children" value="{{ old('children', $worker->children) }}">
                            <label for="children">Children</label>
                            @error('children')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="text" name="education" id="education" class="form-control" placeholder="Enter education" value="{{ old('education', $worker->education) }}">
                            <label for="education">Education</label>
                            @error('education')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-floating">
                            <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Enter birth date" value="{{ old('birth_date', $worker->birth_date) }}">
                            <label for="birth_date">Birth Date</label>
                            @error('birth_date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-2">

                    <div class="col-md-4">


                        <div class="form-floating">
                            <input type="text" name="weight" id="weight" class="form-control" placeholder="Enter weight" value="{{ old('weight', $worker->weight) }}">
                            <label for="weight">Weight</label>
                            @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="work_experience_country" id="work_experience_country" class="form-control" placeholder="Enter work experience country" value="{{ old('work_experience_country', $worker->work_experience_country) }}">
                            <label for="work_experience_country">Work Experience Country</label>
                            @error('work_experience_country')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="status_id" id="status_id" class="form-control" placeholder="Enter status ID" value="{{ old('status_id', $worker->status_id) }}">
                            <label for="status_id">Status ID</label>
                            @error('status_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mb-2">


                    <div class="col-md-6">
                        <div id="Experiance" class="mt-0">
                            <!-- Loop through each practical experience -->
                            @foreach (json_decode($worker->practical_experience) as $experience)
                            <div class="repeater">
                                <div class="d-flex mb-2">
                                    <!-- Populate input fields with experience data -->
                                    <input type="text" class="form-control mr-2" name="practical_experience[][name]" placeholder="Name" value="{{ $experience->name ?? '' }}">
                                    <input type="text" class="form-control mr-2" name="practical_experience[][value]" placeholder="Value" value="{{ $experience->value ?? '' }}">
                                    <button data-repeater-delete type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-danger" id="errorExperience"></div>
                        <button id="addExperienceBtn" type="button" class="btn btn-outline-primary btn-sm mt-2">Add Experience</button>
                    </div>

                    <div class="col-md-6">
                        <div id="languagePercentages" class="mt-0">
                            <!-- Loop through each language -->
                            @foreach (json_decode($worker->languages) as $language)
                            <div class="repeater">
                                <div class="d-flex mb-2">
                                    <!-- Populate input fields with language data -->
                                    <input type="text" class="form-control mr-2" name="languages[][name]" placeholder="Language Name" value="{{ $language->name ?? '' }}">
                                    <input type="number" class="form-control mr-2" name="languages[][percentage]" placeholder="Percentage" value="{{ $language->percentage ?? '' }}">
                                    <button data-repeater-delete type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-danger" id="errorLanguages"></div>
                        <button id="addLanguageBtn" type="button" class="btn btn-outline-primary btn-sm mt-2">Add Language</button>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <div class="form-floating">
                        <input type="text" name="office_id" id="office_id" class="form-control" placeholder="Enter office ID" value="{{ old('office_id', $worker->office_id) }}">
                        <label for="office_id">Office ID</label>
                        @error('office_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-floating">
                    <div class="form-check">
                        <input type="checkbox" name="has_practical_experience" id="has_practical_experience" class="form-check-input" {{ old('has_practical_experience', $worker->has_practical_experience) ? 'checked' : '' }}>
                        <label class="form-check-label" for="has_practical_experience">Has Practical Experience</label>
                    </div>
                    @error('has_practical_experience')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4">Update Worker</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/js/pages/select2.init.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/js/pages/select2.init.js')}}"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Repeater JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Form Repeater for practical experience
        $('#Experiance').repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        // Template for practical experience
        var experienceTemplate = $('#Experiance .repeater').eq(0).clone();

        // Handle add practical experience button
        $('#addExperienceBtn').on('click', function() {
            var template = experienceTemplate.clone();
            template.find('input').val(''); // Clear input fields
            $('#Experiance').append(template);
        });

        // Handle delete practical experience button
        $('#Experiance').on('click', 'button[data-repeater-delete]', function() {
            $(this).closest('.repeater').slideUp(function() {
                $(this).remove();
            });
        });

        // Initialize Form Repeater for languages
        $('#languagePercentages').repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        // Template for languages
        var languageTemplate = $('#languagePercentages .repeater').eq(0).clone();

        // Handle add language button
        $('#addLanguageBtn').on('click', function() {
            var template = languageTemplate.clone();
            template.find('input').val(''); // Clear input fields
            $('#languagePercentages').append(template);
        });

        // Handle delete language button
        $('#languagePercentages').on('click', 'button[data-repeater-delete]', function() {
            $(this).closest('.repeater').slideUp(function() {
                $(this).remove();
            });
        });
    });
</script>



@endsection