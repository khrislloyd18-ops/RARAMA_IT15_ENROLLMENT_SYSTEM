@extends('layouts.app')

@section('title', 'Students List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Students List</h2>
    @auth
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
    @endauth
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Student #</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_number }}</td>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-info">View</a>
                
                @auth
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                @endauth
            </td>
        </tr>
        @empty
        <tr><td colspan="5" class="text-center">No students found.</td></tr>
        @endforelse
    </tbody>
</table>

@guest
    <div class="alert alert-info mt-3">
        <i class="fas fa-info-circle"></i> 
        <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to add, edit, or delete students.
    </div>
@endguest
@endsection