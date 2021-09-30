<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\MedicalRecord;
use App\Patient;
use Illuminate\Http\Request;
use DB;

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

        $groups = DB::table('medical_records')
                  ->select('riwayat_perjalanan_penyakit', DB::raw('count(*) as total'))
                  ->groupBy('riwayat_perjalanan_penyakit')
                  ->pluck('total', 'riwayat_perjalanan_penyakit')->all();
        // var_dump($groups);die;
        for ($i=0; $i<=count($groups); $i++) {
                    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                }
        // Prepare the data for returning with the view
        $labels = (array_keys($groups));
        $dataset = (array_values($groups));
        $colours = $colours;
        $chart = new MedicalRecord();
                $chart->labels = (array_keys($groups));
                $chart->dataset = (array_values($groups));
                $chart->colours = $colours;

        return view('dashboard.index', compact('countDoc','countPat','countMed', 'chart', 'labels', 'dataset', 'colours'));
        // return view('home');
    }
}
