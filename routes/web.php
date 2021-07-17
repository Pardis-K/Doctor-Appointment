<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\DashboardController;
use  App\Http\Controllers\LogoutController;
use  App\Http\Controllers\GroupdocController;
use  App\Http\Controllers\PatientController;
use  App\Http\Controllers\DoctorTimeController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\ReserveController;
use  App\Http\Controllers\VisitController;


Route::get('/',function(){
    return view('welcome');
});
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/logout', [LogoutController::class,'store'])->name('logout');


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
Route::get('/Reserve', [ReserveController::class,'doctorlist'])->name('Reserve');
Route::get('/Reserve', [ReserveController::class,'doctorlist'])->name('Reserve');

Route::get('/Visit', [VisitController::class,'index'])->name('Visit');
Route::post('/Visit', [VisitController::class,'show'])->name('Visit');
/*Route::get('/Visit', [VisitController::class,'doctorlist'])->name('Visit');
Route::get('/Visit/{id}', [VisitController::class,'nobat']);
Route::get('/Visit', [VisitController::class,'doctorlist'])->name('Visit');*/
//Route::get('/Visit', [VisitController::class,'doctorlist'])->name('Visit');
