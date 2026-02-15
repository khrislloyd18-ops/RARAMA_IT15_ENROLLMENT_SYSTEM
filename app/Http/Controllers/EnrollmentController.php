<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Show enrollment form
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('enrollments.create', compact('students', 'courses'));
    }

    /**
     * Store a new enrollment with business rules
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id'
        ]);

        $student = Student::findOrFail($request->student_id);
        $course = Course::findOrFail($request->course_id);

        // Check for duplicate enrollment
        if ($student->courses()->where('course_id', $course->id)->exists()) {
            return back()->with('error', 'Student is already enrolled in this course.');
        }

        // Check course capacity
        if (!$course->hasAvailableSlot()) {
            return back()->with('error', 'Course has reached maximum capacity.');
        }

        // Enroll student
        $student->courses()->attach($course->id);

        return redirect()->route('courses.show', $course)
                         ->with('success', 'Student enrolled successfully.');
    }

    /**
     * Remove an enrollment
     */
    public function destroy(Student $student, Course $course)
    {
        $student->courses()->detach($course->id);
        
        return back()->with('success', 'Enrollment removed successfully.');
    }
}