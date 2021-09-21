<?php

namespace App\Http\Controllers;

use App\MedicalRecord;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalRecords = MedicalRecord::all();
        return view('medical_record.index', ['medicalRecords' => $medicalRecords ]);
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
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalRecord $medicalRecord)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicalRecord  $medicalRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalRecord $medicalRecord)
    {
        //
    }
}
