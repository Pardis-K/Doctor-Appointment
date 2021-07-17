<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Time;
use DB;
use App\Http\Requests;

class VisitController extends Controller
{
    public function index()
    {
        return view('users.doctor.visit');
    }
    public function show()
    {   
        $lists = DB::select("select * from users where role = 'Doctor'");
        $patients = DB::select("select * from patients");
        $patientusers = DB::select("select * from users where role = 'Patient'");
        $doctortime = DB::select('select patient__time__users.reserve_date,patient__time__users.time_id  from patient__time__users inner join users where times.time_id = users.id');
        return view('users.doctor.visit',['users'=>$lists],['times'=>$doctortime]);
    }
}
