<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        return view('/dashboard/dashboard');
    }
    public function userprofile(){
        $user = Auth::user();
        return view('/dashboard/view-profile', compact('user'));
    }
    public function editprofile(){
        $user = Auth::user();
        return view('/dashboard/edit-profile', compact('user'));
    }
    public function update(Request $request){
        $user = Auth::user();

        $user->name = $request->input('fullname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');

        $user->update($request->all());

        return redirect()->back()->with('success', 'User Information Successfully Updated');
    }
}
