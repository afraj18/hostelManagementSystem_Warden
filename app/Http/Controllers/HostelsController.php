<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HostelsController extends Controller
{
    //
    function index()
    {
        return view('addHostel');
    }
    function createHostel(Request $request)
    {

        // return "success";
        $request->validate([
            'hostel_name' => 'required|unique:hostels',
            'type' => 'required',
            'no_room' => 'required',
            'room_capacity' => 'required',
            'address' => 'required',
            'contact_no' => 'required|unique:hostels',
            'level' => 'required',

        ]);

        $query = DB::table('hostels')->insert([
            'hostel_name' => $request->input('hostel_name'),
            'no_room' => $request->input('no_room'),
            'room_capacity' => $request->input('room_capacity'),
            'address' => $request->input('address'),
            'contact_no' => $request->input('contact_no'),
            'type' => $request->input('type'),
            'level' => $request->input('level'),
        ]);

        if ($query) {

            return back()->with("success", "Hostel details succesfully added");
        } else {
            return back()->with("fail", "Something went wrong");
        }
    }
}
