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
}
