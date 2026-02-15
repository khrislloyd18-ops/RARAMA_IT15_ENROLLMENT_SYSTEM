@extends('layouts.app')

@section('title', 'Course Details')

@section('content')
<div class="mb-3">
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">← Back to List</a>
    
    @auth
        <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    @endauth
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Course Information</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr><th>Code:</th><td>{{ $course->course_code }}</td></tr>
                    <tr><th>Name:</th><td>{{ $course->course_name }}</td></tr>
                    <tr><th>Capacity:</th><td>{{ $course->capacity }}</td></tr>
                    <tr><th>Enrolled:</th><td>{{ $course->students->count() }}/{{ $course->capacity }}</td></tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Enrolled Students</h4>
            </div>
            <div class="card-body">
                @if($course->students->count() > 0)
                    <ul class="list-group">
                        @foreach($course->students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}
                            @auth
                                <form action="{{ route('enrollments.destroy', [$student, $course]) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                </form>
                            @endauth
                        </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No students enrolled.</p>
                @endif
                
                @auth
                    <div class="mt-3">
                        <a href="{{ route('enrollments.create') }}?course_id={{ $course->id }}" class="btn btn-sm btn-success">Enroll Student</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection