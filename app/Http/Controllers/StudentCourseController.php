<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class StudentCourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')
            ->where('status', 'published')
            ->latest()
            ->paginate(12);

        return view('student_courses', compact('courses'));
    }

    public function show(Course $course)
    {
        $course->load('instructor');
        return view('student.course', compact('course'));
    }
}