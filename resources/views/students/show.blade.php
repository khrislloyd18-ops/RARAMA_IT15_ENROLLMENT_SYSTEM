@extends('layouts.app')

@section('title', 'Student Profile')

@section('content')
<div class="mb-3">
    <a href="{{ route('students.index') }}" class="btn btn-secondary">← Back to List</a>
    
    @auth
        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    @endauth
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Student Information</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr><th>Student #:</th><td>{{ $student->student_number }}</td></tr>
                    <tr><th>Name:</th><td>{{ $student->first_name }} {{ $student->last_name }}</td></tr>
                    <tr><th>Email:</th><td>{{ $student->email }}</td></tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Enrolled Courses</h4>
            </div>
            <div class="card-body">
                @if($student->courses->count() > 0)
                    <ul class="list-group">
                        @foreach($student->courses as $course)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $course->course_code }} - {{ $course->course_name }}
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
                    <p class="text-muted">No courses enrolled.</p>
                @endif
                
                @auth
                    <div class="mt-3">
                        <a href="{{ route('enrollments.create') }}?student_id={{ $student->id }}" class="btn btn-sm btn-success">Enroll in Course</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection