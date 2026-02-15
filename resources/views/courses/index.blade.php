@extends('layouts.app')

@section('title', 'Courses List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Courses List</h2>
    @auth
        <a href="{{ route('courses.create') }}" class="btn btn-primary">+ Add Course</a>
    @endauth
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Capacity</th>
            <th>Enrolled</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_code }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->capacity }}</td>
            <td>{{ $course->students->count() }}</td>
            <td>
                <a href="{{ route('courses.show', $course) }}" class="btn btn-sm btn-info">View</a>
                
                @auth
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                @endauth
            </td>
        </tr>
        @empty
        <tr><td colspan="6" class="text-center">No courses found.</td></tr>
        @endforelse
    </tbody>
</table>

@guest
    <div class="alert alert-info mt-3">
        <i class="fas fa-info-circle"></i> 
        <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to add, edit, or delete courses.
    </div>
@endguest
@endsection