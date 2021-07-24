<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use DB;
use App\Http\Requests;

class GroupdocController extends Controller
{
    public function index()
    {
        return view('users.doctor.groupdoc');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
        ]);
        Group::create([
            'name' => $request->name ]);
        return back();    
    }
    public function grouplist(){
        $groups = DB::select('select * from groups');
        return view('users.doctor.groupdoc',['groups'=>$groups]);
     }
  
    public function removegroup($id) {
        $Grp=Group::find($id);
        $Grp->delete();
        return back();
    }
    public function editgroup(Request $request, Group $id){
        $this->validate($request,[
            'name'=>'required|max:255',
        ]);
        $id->name=$request->name;
        $id->update();
        return redirect(route('Groupdoc'));
    }

    public function editablegroup(Group $id){
        return view('users.doctor.editablegroup',['group'=>$id]);
    }
}

