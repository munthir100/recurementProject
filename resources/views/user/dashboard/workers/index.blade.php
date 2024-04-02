@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of workers</h1>
    <a href="{{ route('user.dashboard.workers.create') }}" class="btn btn-success mb-3">Create New Worker</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job</th>
                <th>Month Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
            <tr>
                <td>{{ $worker->id }}</td>
                <td>{{ $worker->first_name }}</td>
                <td>{{ $worker->last_name }}</td>
                <td>{{ $worker->job }}</td>
                <td>{{ $worker->month_salary }}</td>
                <td>
                    <a href="{{ route('user.dashboard.workers.show', $worker->id) }}" class="btn btn-primary">Show</a>
                    <a href="{{ route('user.dashboard.workers.edit', $worker->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('user.dashboard.workers.destroy', $worker->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this worker?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
