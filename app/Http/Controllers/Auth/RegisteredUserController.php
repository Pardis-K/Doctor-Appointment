<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
			'melicode'=>'required|max:255',
            'gender'=>'required|max:255',
            'age'=>'required|max:255',
            'username'=>'required|max:255',
            'role'=>'required|max:255',
            'group_id'=>'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ]);

        $user = User::create([
            'name' => $request->name,
			'melicode'=>$request->melicode,
            'age'=>$request->age,
            'gender' =>  $request->gender,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'address'=>$request->address,
            'username'=>$request->username,
            'code'=>$request->code,
            'role'=>$request->role,
            'group_id'=>$request->group_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          
        ]);

        event(new Registered($user));
        Auth::login($user);
        return view('auth.login');
    }
}
