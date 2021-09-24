@extends('layout.master')
@section('judul_halaman','Edit Patient')
@section('main_halaman','Patients')
@section('halaman','Create')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('patient.update',$patient->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h4 class="card-title text-right"> 
                            <a class="btn btn-primary" href="{{ route('patient.index') }}"> Back</a>
                        </h4>
                        <div class="form-group row">
                            <label for="nama_pasien" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{ $patient->nama_pasien }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_telp"  name="no_telp" value="{{ $patient->no_telp }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 text-right control-label col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $patient->alamat }}">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection