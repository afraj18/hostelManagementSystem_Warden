<?php

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
    return view('dashboard', [
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

Route::get('/addStudents', [StudentController::class, 'index']);

Route::post('/importStudents', [StudentController::class, 'importStudents'])->name('import');
