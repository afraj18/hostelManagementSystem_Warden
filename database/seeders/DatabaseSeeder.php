<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hostels;
use App\Models\Students;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        Hostels::create(
            [
                'hostel_name' => 'Coral Beauty',
                'no_room' => 60,
                'room_capacity' => 2,
                'address' => 'Badulusirigama',
                'contact_no' => '0712323233',
                'type' => 'male'
            ]
        );
        // Hostels::create(
        //     [
        //         'hostelName' => 'Blue Sapphire',
        //         'capacity' => '50',
        //         'address' => 'Uva Wellassa University',
        //         'type' => 'female'
        //     ]
        // );
        // Students::create([
        //     'reg_no' => "IIT18012",
        //     'first_name' => "Mohamed",
        //     'last_name' => "Afraj",
        //     'year' => '3rd',
        //     'email' => "iit18012@std.uwu.ac.lk",
        //     'hostel' => "Coral Beauty",
        //     'gender' => "Male",
        // ]);
        // Students::create([
        //     'reg_no' => "IIT18054",
        //     'first_name' => "Melanga",
        //     'last_name' => "Dissanayake",
        //     'year' => '3rd',
        //     'email' => "iit18054@std.uwu.ac.lk",
        //     'hostel' => "Silver Tips",
        //     'gender' => "Male",
        // ]);
        // Students::create([
        //     'reg_no' => "IIT18022",
        //     'first_name' => "Nathasha",
        //     'last_name' => "Rajapakshe",
        //     'year' => '3rd',
        //     'email' => "iit18022@std.uwu.ac.lk",
        //     'hostel' => "Blue Shappire",
        //     'gender' => "Female",
        // ]);
    }
}
