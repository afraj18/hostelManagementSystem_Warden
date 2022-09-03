<?php

namespace App\Imports;

use App\Models\Hostels;
use App\Models\Students;
use Illuminate\Validation\Rules\Unique;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation
{

    public  function randomhostel($gender, $year)
    {
        if (strtolower($gender) == "male") {
            $hostelName = array();

            foreach (Hostels::all()->where('type', '=', 'male') as $hostel) {
                array_push($hostelName, $hostel->hostel_name);
            }
            $bRandVal = rand(0, 2);
            return $hostelName[$bRandVal];
        } elseif (strtolower($gender) == "female") {
            $girlsHostelName = array();
            foreach (Hostels::all()->where('type', '=', 'female') as $hostel) {
                array_push($girlsHostelName, $hostel->hostel_name);
            }
            $gRandVal = rand(0, 2);
            return $girlsHostelName[$gRandVal];
        }
    }
    public function room_no($hostel)
    {
        // Hostels::where('hostel',$hostel);
        $totalRoom = Hostels::getRoomCapacity($hostel);
        $num = rand(1, $totalRoom);
        return $num;
    }

    public function bed_no($hostel)
    {
        // Hostels::where('hostel',$hostel);
        $totalBed = Hostels::getBedCapacity($hostel);
        $num = rand(1, $totalBed);
        return $num;
    }
    public function model(array $row)
    {
        $hostel = StudentsImport::randomhostel($row['gender'], $row['year']);
        $room_no = StudentsImport::room_no($hostel);
        $bed_no = StudentsImport::bed_no($hostel);
        return new Students([
            "reg_no" => $row['reg_no'],
            "first_name" => $row['first_name'],
            "last_name" => $row['last_name'],
            "year" => $row['year'],
            "email" => $row['email'],
            "hostel" => $hostel,
            "room_no" => $room_no,
            "bed_no" => $bed_no,
            "gender" => $row['gender'],
        ]);
    }


    public function rules(): array
    {

        return [
            "reg_no" => 'required|unique:students,reg_no',
            "first_name" => 'required',
            "last_name" => 'required',
            "year" => 'required',
            "email" => 'required|unique:students,reg_no',
            "hostel" => 'required',
            "gender" => 'required',
        ];
    }
}
