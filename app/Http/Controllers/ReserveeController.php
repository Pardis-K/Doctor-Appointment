<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient_Time_User;
use DB;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ReserveeController extends Controller
{
    public function index()
    {
        return view('users.doctor.visit');
    }
    public function show()
    {   
        $lists = DB::select("select * from users where role = 'Doctor'");
        $patients = DB::select("select * from patients");
        $patientuser =DB::select("select * from users where role = 'Patient'");
        $patienttime = DB::select("select * from  patient__time__users");
        return view('users.doctor.visit',['users'=>$lists,'patients'=>$patients,'patientusers'=>$patientuser,'patienttimes'=>$patienttime]);
    }
    public function store(Request $request)
   {    
        $example = Patient_Time_User::find($request->patienttime_id);
        $example->patient_id = $request->patient_id;
        $example->doctor_comment = $request->doctor_comment;
        $example->drugs = $request->drugs;
        $example->update();
        
        return redirect(route('Fvisit'));
    }
    public function visit()
    {
        $query = DB::select("select visit_date,users.name  from patient__time__users inner join users on patient__time__users.user_id = users.id ");
        $users = Auth::id();
        $doctors = DB::select("select * from users where users.id ='$users'");
        return view('users.doctor.finalvisit',['users'=>$query,'doctors'=>$doctors]);

    }

}
