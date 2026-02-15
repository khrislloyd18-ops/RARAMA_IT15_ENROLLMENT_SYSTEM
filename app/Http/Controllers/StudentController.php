<?php

namespace App\Http\Controllers;

use App\Models\Student; // IMPORT the model
use Illuminate\Http\Request;

class StudentController extends Controller // This is the controller class
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students'
        ]);

        Student::create($validated);
        
        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        $student->load('courses');
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_number' => 'required|unique:students,student_number,' . $student->id,
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id
        ]);

        $student->update($validated);
        
        return redirect()->route('students.index')
                         ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully.');
    }
}