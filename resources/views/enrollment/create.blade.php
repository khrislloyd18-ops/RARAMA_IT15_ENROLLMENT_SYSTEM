@extends('layouts.app')

@section('title', 'Enroll Student')

@section('content')
<h1>Enroll Student in Course</h1>

<form action="{{ route('enrollments.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="student_id" class="form-label">Select Student</label>
        <select name="student_id" id="student_id" class="form-select" required>
            <option value="">Choose a student...</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}">
                    {{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="course_id" class="form-label">Select Course</label>
        <select name="course_id" id="course_id" class="form-select" required>
            <option value="">Choose a course...</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->course_code }} - {{ $course->course_name }} 
                    ({{ $course->students->count() }}/{{ $course->capacity }} enrolled)
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enroll Student</button>
</form>
@endsection