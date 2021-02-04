<?php

namespace App\Http\Controllers;
use App\User;
use App\Doctor;
use App\Profile;
use App\Test;

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
        $user   = User::get()->first();
        $doctor = Doctor::all()->count();
        $name   = Profile::get()->first()->doctor1;
        $test   = Test::get()->count();
        return view('admin.index', ['active' => ['match','index'], 'user' => $user, 'doctor' => $doctor, 'drname' => $name, 'test' => $test]);
    }
}
