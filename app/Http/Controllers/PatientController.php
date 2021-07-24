<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Group;
use DB;
use App\Http\Requests;

class PatientController extends Controller
{
    public function index()
    {
        return view('users.doctor.patient');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
        ]);
        
        Patient::create([
            'name' => $request->name,
            'group_id' => $request->group_id ]);
        return back(); 
    }
    public function show() {
      $patients = DB::select('select * from patients');
      $groups = DB::select('select * from groups where id > 1');
      return view('users.doctor.patient',['patients'=>$patients],['groups'=>$groups]);
   }
   public function removepatient($id) {
    $Pnt=Patient::find($id);
    $Pnt->delete();
    return back();
    }
    public function editpatient(Request $request, Patient $id){
        $this->validate($request,[
            'name'=>'required|max:255',
        ]);
        $id->name=$request->name;
        $id->update();
        return redirect(route('Patient'));
    }

    public function editablepatient(Patient $id){
        return view('users.doctor.editablepatient',['patient'=>$id]);
    }
}

