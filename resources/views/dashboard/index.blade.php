@extends('layout.master')
@section('judul_halaman','Dashboard')
@section('main_halaman','Main Dashboard')
@section('halaman','Sub Dashboard')
@section('content')
<div class="container-fluid">

   
    <div class="row">
            <div class="col-md-4">
                <div class="card m-t-0">
                    <div class="row">
                        <div class="col-md-6 text-center p-t-10">
                            <i class="fas fa-user-md fa-3x" style="color:#28b779;"></i>
                        </div>
                        <div class="col-md-6 border-left text-center p-t-10">
                            <h3 class="mb-0 font-weight-bold">{{ $countDoc }}</h3>
                            <span class="text-muted">Doctors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-t-0">
                    <div class="row">
                        <div class="col-md-6 text-center p-t-10">
                            <i class="fas fa-user fa-3x" style="color:#27a9e3;"></i>
                        </div>
                        <div class="col-md-6 border-left text-center p-t-10">
                            <h3 class="mb-0 font-weight-bold">{{ $countPat }}</h3>
                            <span class="text-muted">Patients</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-t-0">
                    <div class="row">
                        <div class="col-md-6 text-center p-t-10">
                            <i class="fas fa-file-alt fa-3x" style="color:#ffb848;"></i>
                        </div>
                        <div class="col-md-6 border-left text-center p-t-10">
                            <h3 class="mb-0 ">{{ $countMed }}</h3>
                            <span class="text-muted">Medical Records</span>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Site Analysis</h4>
                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                        </div>
                    </div>
                    <div class="row">
                        <!-- column -->
                        <div class="col-lg-9">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-line-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-user m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">2540</h5>
                                        <small class="font-light">Total Users</small>
                                    </div>
                                </div>
                                    <div class="col-6">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-plus m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">120</h5>
                                        <small class="font-light">New Users</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">656</h5>
                                        <small class="font-light">Total Shop</small>
                                    </div>
                                </div>
                                    <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-tag m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">9540</h5>
                                        <small class="font-light">Total Orders</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-table m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">100</h5>
                                        <small class="font-light">Pending Orders</small>
                                    </div>
                                </div>
                                <div class="col-6 m-t-15">
                                    <div class="bg-dark p-10 text-white text-center">
                                        <i class="fa fa-globe m-b-5 font-16"></i>
                                        <h5 class="m-b-0 m-t-5">8540</h5>
                                        <small class="font-light">Online Orders</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
</div>
@endsection