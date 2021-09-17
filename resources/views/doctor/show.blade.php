@extends('layout.master')
@section('main_halaman','Doctors')
@section('halaman','Detail')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">Doctor Detail</h4>
        </div>
        <ul class="list-style-none">
            <li class="d-flex no-block card-body">
                <i class=" far fa-user w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">Name</a>
                    <span class="text-muted">{{ $doctor->nama_dokter }}</span>
                </div>
            </li>
            <li class="d-flex no-block card-body border-top">
                <i class="far fa-hospital w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">No SIP</a>
                    <span class="text-muted">{{ $doctor->sip }}</span>
                </div>
            </li>
            <li class="d-flex no-block card-body border-top">
                <i class="fa fa-phone w-30px m-t-5"></i>
                <div>
                    <a href="#" class="m-b-0 font-medium p-0">Telephone</a>
                    <span class="text-muted">{{ $doctor->no_telp }}</span>
                </div>
            </li>
        </ul>
        <div class="border-top">
            <div class="card-body text-right">
                <a class="btn btn-primary" href="{{ route('doctor.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection