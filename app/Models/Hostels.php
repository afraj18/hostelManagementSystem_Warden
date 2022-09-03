<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hostels extends Model
{
    use HasFactory;
    public static function getHostelName()
    {
        $records = DB::table('hostels')->select('hostel_name');
        return $records;
    }
    public static function getRoomCapacity($hostel)
    {
        $records = DB::table('hostels')->select('no_room')->where('hostel_name', '=', $hostel)->value('no_room');
        return $records;
    }
    public static function getBedCapacity($hostel)
    {
        $records = DB::table('hostels')->select('room_capacity')->where('hostel_name', '=', $hostel)->value('room_capacity');
        return $records;
    }
}
