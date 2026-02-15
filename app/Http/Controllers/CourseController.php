<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of all courses
     */
    public function index()
    {
        $courses = Course::with('students')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new course
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created course in storage
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'capacity' => 'required|integer|min:1'
        ]);

        Course::create($validated);
        
        return redirect()->route('courses.index')
                         ->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified course
     */
    public function show(Course $course)
    {
        $course->load('students');
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified course
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified course in storage
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'course_code' => 'required|unique:courses,course_code,' . $course->id,
            'course_name' => 'required',
            'capacity' => 'required|integer|min:1'
        ]);

        $course->update($validated);
        
        return redirect()->route('courses.index')
                         ->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified course from storage
     */
    public function destroy(Course $course)
    {
        $course->delete();
        
        return redirect()->route('courses.index')
                         ->with('success', 'Course deleted successfully.');
    }
}