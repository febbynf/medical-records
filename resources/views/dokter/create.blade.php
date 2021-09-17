@extends('layout.master')
@section('judul_halaman','Doctors')
@section('main_halaman','Doctors')
@section('halaman','Create')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">New Doctor</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">SIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lname" placeholder="No SIP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="lname" placeholder="Telephone">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection