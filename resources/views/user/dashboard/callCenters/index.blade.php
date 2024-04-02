@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of callCenters</h1>
    <a href="{{ route('user.dashboard.callCenters.create') }}" class="btn btn-success mb-3">Create New Office</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($callCenters as $callCenter)
            <tr>
                <td>{{ $callCenter->id }}</td>
                <td>{{ $callCenter->account->name }}</td>
                <td>
                    <a href="{{ route('user.dashboard.callCenters.edit', $callCenter->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('user.dashboard.callCenters.destroy', $callCenter->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
