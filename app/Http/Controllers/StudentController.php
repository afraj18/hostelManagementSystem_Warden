<?php

namespace App\Http\Controllers;

use App\Models\Hostels;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use Illuminate\Console\View\Components\Alert;
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

    public static function updateStudent(Request $request)
    {
        // dd($request);
        $email = $request->input('email');
        $hostel = $request->input('hostel');
        $room_no = $request->input('room_no');
        $bed_no = $request->input('bed_no');

        // dd($hostel);
        // dd($reg_no);
        if (DB::table('students')
            ->where('email', $email)
            ->update(['hostel' => $hostel, 'room_no' => $room_no, 'bed_no' => $bed_no])
        ) {
            return view('addStudents', ['students' => Students::all()]);
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }
}
