@extends('layout.master')
@section('judul_halaman','Edit Doctor')
@section('main_halaman','Doctors')
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
                <form class="form-horizontal" action="{{ route('doctor.update',$doctor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <h4 class="card-title text-right"> 
                            <a class="btn btn-primary" href="{{ route('doctor.index') }}"> Back</a>
                        </h4>
                        <div class="form-group row">
                            <label for="nama_dokter" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Name" value="{{ $doctor->nama_dokter }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sip" class="col-sm-3 text-right control-label col-form-label">SIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sip" name="sip" placeholder="No SIP" value="{{ $doctor->sip }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_telp" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="no_telp"  name="no_telp" placeholder="Telephone"  value="{{ $doctor->no_telp }}" >
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