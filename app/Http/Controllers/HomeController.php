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

        // $groups = DB::table('medical_records')
        //           ->select('riwayat_perjalanan_penyakit', DB::raw('count(*) as total'))
        //           ->groupBy('riwayat_perjalanan_penyakit')
        //           ->pluck('total', 'riwayat_perjalanan_penyakit')->all();
        // var_dump($groups);die;
        // for ($i=0; $i<=count($groups); $i++) {
        //             $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        //         }
        // $labels = (array_keys($groups));
        // $dataset = (array_values($groups));
        $labels = ['Anamnesia','Riwayat Perjalanan Penyakit', 'Pemeriksaan Fisik', 
                    'Penemuan Klinik', 'Diagnosa', 'Obat RS', 'Tindakan RS', 
                    'Kondisi Pulang', 'Anjuran Kontrol'];
        for ($i=0; $i<=count($labels); $i++) {
                    $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                }
        for ($i=0; $i<=count($labels); $i++) {
                    $datatset[] = rand(1,30);
                }
        $dataset = $datatset;
        $colours = $colours;
       

        return view('dashboard.index', compact('countDoc','countPat','countMed', 'labels', 'dataset', 'colours'));
        // return view('home');
    }
}
