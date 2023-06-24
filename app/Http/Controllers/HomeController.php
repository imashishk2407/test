<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::get();
        // dd($user);

        return view('home')->with('user',$user);
    }


    public function edit($id){
        $user = User::findOrFail($id);
        // return view('edit')compact('user',$user);;
        return view('edit',compact('user'));
    }



    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect('home')->with('success', 'User updated successfully');
    }
}
