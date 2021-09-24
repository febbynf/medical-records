@extends('layout.master')
@section('main_halaman','Medical Records')
@section('halaman','Detail')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">Medical Record Detail</h4>
        </div>
        <ul class="list-style-none">
            <li class="d-flex no-block card-body">
                <i class=" far fa-user w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">Doctor</a>
                    <span class="text-muted">{{ $medicalRecord->nama_pasien }}</span>
                </div>
            </li>
            <li class="d-flex no-block card-body border-top">
                <i class="fa fa-phone w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">Patient</a>
                    <span class="text-muted">{{ $medicalRecord->no_telp }}</span>
                </div>
            </li>
            <li class="d-flex no-block card-body border-top">
                <i class="far fa-hospital w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">Anamnesia</a>
                    <span class="text-muted">{{ $medicalRecord->anamnesia }}</span>
                </div>
            </li>
        </ul>
        <div class="border-top">
            <div class="card-body text-right">
                <a class="btn btn-primary" href="{{ route('medical-record.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection