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
                    <h5 class="card-title">Medical Record</h5>
                    <canvas id="myChart" height="450" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
    
   
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
</div>
@endsection
@push('js')
<script>

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:  {!!json_encode($labels)!!},
        datasets: [{
            label: '# of Votes',
            data: {!! json_encode($chart->dataset)!!} ,
            backgroundColor: {!! json_encode($chart->colours)!!} ,
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


    
</script>
@endpush