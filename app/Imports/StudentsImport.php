<?php

namespace App\Imports;

use App\Models\Students;
use Illuminate\Validation\Rules\Unique;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Students([
            //
            "reg_no" => $row['reg_no'],
            "first_name" => $row['first_name'],
            "last_name" => $row['last_name'],
            "year" => $row['year'],
            "email" => $row['email'],
            "hostel" => $row['hostel'],
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
