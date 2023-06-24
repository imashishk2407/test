<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Userlist(Request $request){
        return view('userlist');
    }
 
}
