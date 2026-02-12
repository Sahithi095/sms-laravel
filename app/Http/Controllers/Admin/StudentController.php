<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students,email',
            'course' => 'required',
        ]);

        Student::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'course' => $request->course,
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:students,email,' . $student->id,
            'course' => 'required',
        ]);

        $student->update([
            'name'   => $request->name,
            'email'  => $request->email,
            'course' => $request->course,
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.students.index')
            ->with('success', 'Student deleted successfully!');
    }
}
