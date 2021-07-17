<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
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

            //auth()->attempt($request->only('username','password'));
            return redirect()->route('dashboard');

    }
    
       
}
