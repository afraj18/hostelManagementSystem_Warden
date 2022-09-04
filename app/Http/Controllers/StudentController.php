<?php

namespace App\Http\Controllers;

use App\Models\Hostels;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Students::all();
        return view('addStudents', compact('students'));
    }

    // public function searcStudent($email)
    // {
    //     $student = Students::searchStudents($email);
    //     return view('changeStudent', compact('student', 'email'));
    // }

    function searchStudent(Request $request)
    {

        // return "success";
        // $request->validate([
        //     'email' => 'required',
        // ]);

        $records = DB::table('students')
            ->select('reg_no', 'first_name', 'last_name', 'year', 'email', 'hostel', 'gender', 'room_no', 'bed_no')
            ->where('email', "=", $request->input('email'))->get();
        // return $records;

        if ($records) {
            return view('studentDetail', [
                'student' => Students::searchStudents($request->input('email')),
                'hostels' => Hostels::all(),
            ]);
        } else {
            // return back()->with("fail", "Something went wrong");
        }
    }

    public function importStudents(Request $request)
    {
        Excel::import(new StudentsImport, $request->file('student_file'));
        return back();
    }
}
