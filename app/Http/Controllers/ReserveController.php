<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Time;
use DB;
use Carbon\Carbon;
use App\Models\Patient_Time_User;
use Illuminate\Support\Facades\Auth;

class ReserveController extends Controller
{
    public function index()
    {
        return view('users.patient.reserve');
    }
    public function doctorlist(){
        $lists = DB::select("select * from users where role = 'Doctor'");
        return view('users.patient.reserve',['users'=>$lists]);
     }
    public function show(Request $request)
    {
        $doctortime = DB::select("select times.id,users.name,times.starttime,times.max_patient  from times inner join users where times.time_id = users.id and role = 'Doctor' and users.id = '$request->user_id';");
        return view('users.patient.finalreserve',['times'=>$doctortime]);
    }
    public function nobat(Time $id){
        if( $id->max_patient > 0 && $id->starttime < $id->endtime )
        {
          $id->max_patient=($id->max_patient)-1;
          $id->starttime = Carbon::parse($id->starttime)->addMinutes(30);
          $id->update();
          Patient_Time_User::create([
            'time_id' => $id->time_id,
            'user_id' =>Auth::id(),
            //'reserve_date' => getdate(),
            'visit_date' => $id->starttime,
            ]);
            return redirect(route('MainPatient'));
        }
        else {
           return redirect(route('Reserve'));
        }
        
    }
}
