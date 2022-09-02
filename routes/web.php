<?php

use App\Http\Controllers\Hostels as ControllersHostels;
use App\Http\Controllers\HostelsController;
use App\Http\Controllers\StudentController;
use App\Models\Hostels;
use App\Models\Students;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/hostels', function () {
    return view('hostels', [
        'header' => "UWU Accomodation Centre Dashboard",
        'hostels' => Hostels::all()
    ]);
});
Route::get('/hostel/{id}', function ($id) {
    return view('hostelDetails', [
        'header' => "UWU Accomodation Centre Dashboard",
        'hostels' => Hostels::find($id)
    ]);
});
Route::get('/login', function () {
    return view('login', []);
});

Route::get('/', function () {
    return view('welcome', []);
});
Route::get('/dashboard', function () {
    return view('dashboard', []);
});

Route::get('/subwardens', function () {
    return view('subWardens', []);
});

Route::get('/changeHostel', function () {
    return view('changeHostel', []);
});

Route::get('/addHostel', [HostelsController::class, 'index']);

Route::post('/createHostel', [HostelsController::class, 'createHostel']);

Route::get('/addStudents', [StudentController::class, 'index']);

Route::post('/importStudents', [StudentController::class, 'importStudents'])->name('import');
