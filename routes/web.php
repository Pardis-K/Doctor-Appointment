<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\GroupdocController;
use  App\Http\Controllers\PatientController;
use  App\Http\Controllers\DoctorTimeController;
use App\Http\Controllers\MainAdmin;
use App\Http\Controllers\MainDoctorController;
use App\Http\Controllers\MainPatient;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveeController;
use  App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/MainAdmin', [MainAdmin::class,'index'])->name('MainAdmin');
Route::get('/MainDoctor', [MainDoctorController::class,'index'])->name('MainDoctor');

Route::get('/MainPatient', [MainPatient::class,'index'])->name('MainPatient');
Route::get('/MainPatient', [MainPatient::class,'show'])->name('MainPatient');

Route::get('/Groupdoc', [GroupdocController::class,'index'])->name('Groupdoc');
Route::post('/Groupdoc', [GroupdocController::class,'store']);
Route::get('/Groupdoc', [GroupdocController::class,'grouplist'])->name('Groupdoc');
Route::get('Groupdoc/{id}/delete', [GroupdocController::class,'removegroup']);
Route::get('/editGroupdoc/{id}/edit', [GroupdocController::class,'editgroup'])->name('editGroupdoc');
Route::get('/Groupdoc/{id}/editable', [GroupdocController::class,'editablegroup']);

Route::get('/Patient', [PatientController::class,'index'])->name('Patient');
Route::post('/Patient', [PatientController::class,'store']);
Route::get('/Patient', [PatientController::class,'show'])->name('Patient');
Route::get('Patient/{id}/delete', [PatientController::class,'removepatient']);
Route::get('/editPatient/{id}/edit', [PatientController::class,'editpatient'])->name('editPatient');
Route::get('/Patient/{id}/editable', [PatientController::class,'editablepatient']);

Route::get('/User', [UserController::class,'index'])->name('User');
Route::post('/User', [UserController::class,'store']);
Route::get('/User', [UserController::class,'show'])->name('User');
Route::get('User/{id}/delete', [UserController::class,'removeuser']);
Route::get('/editUser/{id}/edit', [UserController::class,'edituser'])->name('editUser');
Route::get('/User/{id}/editable', [UserController::class,'editableuser']);

Route::get('/DoctorTimes', [DoctorTimeController::class,'index'])->name('DoctorTimes');
Route::post('/DoctorTimes', [DoctorTimeController::class,'store']);
Route::get('/DoctorTimes', [DoctorTimeController::class,'show'])->name('DoctorTimes');
Route::get('DoctorTimes/{id}/delete', [DoctorTimeController::class,'removetime']);
Route::get('/DoctorTimes/{id}/edit', [DoctorTimeController::class,'editTime'])->name('editTime');
Route::get('/DoctorTimes/{id}/editable', [DoctorTimeController::class,'editabletime']);

Route::get('/Reserve', [ReserveController::class,'index'])->name('Reserve');
Route::post('/FReserve', [ReserveController::class,'show'])->name('FReserve');
Route::get('/Reserve', [ReserveController::class,'doctorlist'])->name('Reserve');
Route::get('/Reserve/{id}', [ReserveController::class,'nobat']);


Route::get('/Reservee', [ReserveeController::class,'index'])->name('Reservee');
Route::get('/Reservee', [ReserveeController::class,'show'])->name('Reservee');
Route::post('/Visit', [ReserveeController::class,'store'])->name('Visit');
Route::get('/Fvisit', [ReserveeController::class,'visit'])->name('Fvisit');

require __DIR__.'/auth.php';
