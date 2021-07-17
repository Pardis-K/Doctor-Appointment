<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use DB;
use App\Http\Requests;

class DoctorTimeController extends Controller
{
    public function index()
    {
        return view('users.admin.DoctorTime');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'visitdate'=>'required|max:255',
            'count'=>'required|max:255',
        ]);

        Time::create([
            'time_id' => $request->name ,
            'time' => $request->visitdate,
            'max_patient' => $request->count ]);

        return back();    
    }
    public function show() {
      $doctortime = DB::select('select times.id,users.name,times.time,times.max_patient from times inner join users where times.time_id = users.id');
      $users = DB::select("select * from users where role = 'Doctor'");
      return view('users.admin.DoctorTime',['times'=>$doctortime],['users'=>$users]);
    }
    public function removetime($id) {
        $Tm=Time::find($id);
        $Tm->delete();
        return back();
        }
    public function editTime(Request $request, Time $id){
        $this->validate($request,[
            'time' => $request->visitdate,
            'max_patient' => $request->count ]);
        
        $id->time=$request->visitdate;
        $id->max_patient=$request->count;
        $id->update();
        return redirect(route('DoctorTimes'));
    }

    public function editabletime(Time $id){
        return view('users.admin.editableDocTime',['time'=>$id]);
    }
}
