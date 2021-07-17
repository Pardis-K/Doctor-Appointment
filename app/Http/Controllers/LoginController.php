<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|max:255',
            'password'=>'required|max:255',
        ]);

        if(!Auth::attempt($request->only('username','password')))
          {
            return redirect()->route('dashboard');
          }
    }
}
