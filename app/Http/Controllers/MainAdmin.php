<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class MainAdmin extends Controller
{
    public function index()
    {
        return view('users.admin.mainadmin');
    }

}
