<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
        return view('users.admin.User');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'melicode'=>'required|max:255',
            'gender'=>'required|max:255',
            'age'=>'required|max:255',
            'telephone'=>'required|max:255',
            'username'=>'required|max:255',
            'password'=>'required|max:255',
            'role'=>'required|max:255',
            'group_id'=>'required|max:255',
        ]);
        User::create([
            'name' => $request->name,
            'melicode'=>$request->melicode,
            'age'=>$request->age,
            'gender' =>  $request->gender,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'address'=>$request->address,
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
            'code'=>$request->code,
            'role'=>$request->role,
            'group_id'=>$request->group_id]);

        return back(); 
    }
    public function show() {
      $users = DB::select('select * from users');
      $groups = DB::select('select * from groups');
      return view('users.admin.User',['users'=>$users],['groups'=>$groups]);
   }
   public function removeuser($id) {
    $Pnt=User::find($id);
    $Pnt->delete();
    return back();
    }
    public function edituser(Request $request, User $id){
        $this->validate($request,[
            'name'=>'required|max:255',
            'melicode'=>'required|max:255',
            'username'=>'required|max:255',
            'password'=>'required|max:255'
        ]);
        $id->name=$request->name;
        $id->melicode=$request->melicode;
        $id->username=$request->username;
        $id->password=$request->password;
        $id->update();
        return redirect(route('User'));
    }

    public function editableuser(User $id){
        return view('users.admin.editableuser',['user'=>$id]);
    }
}
