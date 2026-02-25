<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index(Request $request)
    {
        $search = $request->input('search');

        $students = Student::query()
            ->when($search, function($query, $search) {
                return $query->where('name', 'like', "%$search%");
            })
            ->get();

        return view('students', compact('students'));
    }

    // Optional: dummy methods to prevent 404
    public function view($id)
    {
        return "Viewing student ID: $id"; // you can replace with actual view later
    }

    public function edit($id)
    {
        return "Editing student ID: $id"; // you can replace with actual view later
    }

    public function update(Request $request, $id)
    {
        return "Updating student ID: $id";
    }

    public function destroy($id)
    {
        return "Deleting student ID: $id";
    }
}
