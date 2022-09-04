<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Students extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $guarded = [];

    public static function getStudent()
    {
        $records = DB::table('students')->select('reg_no', 'first_name', 'last_name', 'year', 'email', 'hostel', 'gender');
        return $records;
    }

    public static function searchStudents($email)
    {
        $records = DB::table('students')
            ->select('reg_no', 'first_name', 'last_name', 'year', 'email', 'hostel', 'gender', 'room_no', 'bed_no')
            ->where('email', "=", $email)->get();
        return $records;
    }
}
