<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient_Time_User;
use App\Models\User;

class MainPatient extends Controller
{
    public function index()
    {
        return view('users.patient.mainpatient');
    }
    public function show()
    {
        $users = Auth::id();
        $patients = DB::select("select * from users where users.id ='$users'");
        $nobat = DB::select("select * from patient__time__users inner join users on patient__time__users.time_id = users.id where user_id ='$users'");
        return view('users.patient.mainpatient',['users'=>$nobat,'patients'=>$patients]);
    }
}
