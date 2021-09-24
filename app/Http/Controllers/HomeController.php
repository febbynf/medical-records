<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\MedicalRecord;
use App\Patient;
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
        $countDoc = Doctor::all()->count();
        $countPat = Patient::all()->count();
        $countMed = MedicalRecord::all()->count();
        // var_dump($countdoc);die;
        return view('dashboard.index', compact('countDoc','countPat','countMed'));
        // return view('home');
    }
}
