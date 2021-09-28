<?php

namespace App\Http\Controllers;

use App\Report;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDoctor = Doctor::pluck('nama_dokter','id');
        $selectedIdDoc = 0;

        return view('report.index', compact('dataDoctor', 'selectedIdDoc'));
    }

    public function index_filter(Request $request) {
        $start = $request->get('start');
        $end = $request->get('end');
        $id_dokter = $request->get('id_dokter');

        $start_date = Carbon::createFromFormat('d-m-Y', $start);
        $end_date =  Carbon::createFromFormat('d-m-Y', $end)->addDays(1);
        // var_dump($end_date);die;
        $filter = DB::table('medical_records')
                ->join('doctors','doctors.id','=','medical_records.id_dokter')
                ->join('patients','patients.id','=','medical_records.id_pasien')
                ->select('doctors.id',
                        'doctors.nama_dokter', 
                        'patients.nama_pasien',
                        'medical_records.id',
                        'medical_records.anamnesia',
                        'medical_records.riwayat_perjalanan_penyakit',
                        'medical_records.pemeriksaan_fisik',
                        'medical_records.penemuan_klinik',
                        'medical_records.diagnosa',
                        'medical_records.obat_rs',
                        'medical_records.tindakan_rs',
                        'medical_records.kondisi_pulang',
                        'medical_records.anjuran_kontrol',
                        'medical_records.alasan_pulang',
                        'medical_records.obat_pulang',
                        'medical_records.ttd_dokter',
                        'medical_records.dokter',
                        'medical_records.tanggal_pulang',
                        'medical_records.jam_pulang',
                        'medical_records.created_at')
                ->where('doctors.id' ,'=', $id_dokter)
                ->whereBetween('medical_records.created_at', [ $start_date, $end_date ] )
                ->get();
        // var_dump($filter);die;
        if(count($filter) > 0){ //mengecek apakah data kosong atau tidak
            $res['message'] = "Success!";
            $res['values'] = $filter;
            return response($res);
        } else {
            $res['message'] = "Empty!";
            return response($res);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
