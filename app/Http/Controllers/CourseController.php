<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'education_level' => 'required|string|max:255',
            'course' => 'required|string|max:255',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'education_level' => $request->education_level,
            'course' => $request->course,
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }
}