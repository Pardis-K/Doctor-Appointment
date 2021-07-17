<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Time;
use App\Models\Patient_Time_User;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Http\Requests;


class ReserveController extends Controller
{
    public function index()
    {
        return view('users.patient.reserve');
    }
    public function show()
    {   
        $lists = DB::select("select * from users where role = 'Doctor'");
        $doctortime = DB::select('select times.id,times.time,times.max_patient,times.time_id from times inner join users where times.time_id = users.id');
        return view('users.patient.finalreserve',['users'=>$lists],['times'=>$doctortime]);
    }
    public function doctorlist(){
        $lists = DB::select("select * from users where role = 'Doctor'");
        return view('users.patient.reserve',['users'=>$lists]);
     }
    public function nobat(Time $id){
        $id->max_patient=($id->max_patient)-1;
        $id->update();
        /*Patient_Time_User::create([
            'time_id' => $id->time_id,
            'reserve_date' => $id->time]); */
        return redirect(route('Reserve'));
    }
}
