@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
<h1>Add New Student</h1>

<form action="{{ route('students.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="student_number" class="form-label">Student Number</label>
        <input type="text" class="form-control @error('student_number') is-invalid @enderror" 
               id="student_number" name="student_number" value="{{ old('student_number') }}" required>
        @error('student_number')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
               id="first_name" name="first_name" value="{{ old('first_name') }}" required>
        @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
               id="last_name" name="last_name" value="{{ old('last_name') }}" required>
        @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
               id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection