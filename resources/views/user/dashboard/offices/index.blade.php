@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of Offices</h1>
    <a href="{{ route('user.dashboard.offices.create') }}" class="btn btn-success mb-3">Create New Office</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offices as $office)
            <tr>
                <td>{{ $office->id }}</td>
                <td>{{ $office->account->name }}</td>
                <td>{{ $office->location }}</td>
                <td>
                    <a href="{{ route('user.dashboard.offices.edit', $office->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('user.dashboard.offices.destroy', $office->id) }}" method="POST" style="display: inline;">
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
