<?php

namespace App\Http\Controllers;

use App\MedicalRecord;
use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $medicalRecords = MedicalRecord::join('doctors', 'medical_records.id_dokter', '=', 'doctors.id')->get();
        $medicalRecords = DB::table('medical_records')
                        ->join('doctors','doctors.id','=','medical_records.id_dokter')
                        ->join('patients','patients.id','=','medical_records.id_pasien')
                        ->select('doctors.nama_dokter', 
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
                                'medical_records.jam_pulang'
                                )
                        ->get();
        // var_dump($medicalRecords);die;
        return view('medical_record.index', ['medicalRecords' => $medicalRecords ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataDoctor = Doctor::pluck('nama_dokter','id');
        $selectedIdDoc = 0;

        $dataPatient = Patient::pluck('nama_pasien','id');
        $selectedIdPat = 0;
        return view('medical_record.create',compact('dataDoctor','selectedIdDoc', 'dataPatient','selectedIdPat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_dokter'                     => 'required',
            'id_pasien'                     => 'required',
            'anamnesia'                     => 'required',
            'riwayat_perjalanan_penyakit'   => 'required', 
            'pemeriksaan_fisik'             => 'required', 
            'penemuan_klinik'               => 'required',
            'diagnosa'                      => 'required',
            'obat_rs'                       => 'required',
            'tindakan_rs'                   => 'required',
            'kondisi_pulang'                => 'required',
            'anjuran_kontrol'               => 'required',
            'alasan_pulang'                 => 'required',
            'obat_pulang'                   => 'required',
            'ttd_dokter'                    => 'required',
            'dokter'                        => 'required',
            'tanggal_pulang'                => 'required',
            'jam_pulang'                    => 'required',
        ]);
  
        MedicalRecord::create($request->all());
   
        return redirect()->route('medical-record.index')
            ->with('success','Medical Record created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalRecord $medicalRecord)
    {
        return view('medical_record.show',compact('medicalRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalRecord $medicalRecord)
    {
        $dataDoctor = Doctor::pluck('nama_dokter','id');
        $selectedIdDoc = 0;

        $dataPatient = Patient::pluck('nama_pasien','id');
        $selectedIdPat = 0;

        return view('medical_record.edit',compact('dataDoctor','selectedIdDoc', 'dataPatient','selectedIdPat', 'medicalRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        $request->validate([
            'id_dokter'                     => 'required',
            'id_pasien'                     => 'required',
            'anamnesia'                     => 'required',
            'riwayat_perjalanan_penyakit'   => 'required', 
            'pemeriksaan_fisik'             => 'required', 
            'penemuan_klinik'               => 'required',
            'diagnosa'                      => 'required',
            'obat_rs'                       => 'required',
            'tindakan_rs'                   => 'required',
            'kondisi_pulang'                => 'required',
            'anjuran_kontrol'               => 'required',
            'alasan_pulang'                 => 'required',
            'obat_pulang'                   => 'required',
            'ttd_dokter'                    => 'required',
            'dokter'                        => 'required',
            'tanggal_pulang'                => 'required',
            'jam_pulang'                    => 'required'
        ]);
        $medicalRecord->update($request->all());
   
        return redirect()->route('medical-record.index')
            ->with('success','Medical Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalRecord $medicalRecord)
    {
        $medicalRecord->delete();
        return redirect()->route('medical-record.index')->with('success','Medical Record deleted successfully');
    }
}
