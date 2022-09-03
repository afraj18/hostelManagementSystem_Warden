<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Students::all();
        return view('addStudents', compact('students'));
    }

    public function importStudents(Request $request)
    {
        Excel::import(new StudentsImport, $request->file('student_file'));
        return back();
    }
}
