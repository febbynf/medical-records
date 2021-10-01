@extends('layout.master')
@section('judul_halaman','Report Medical Records')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title m-b-0"></h5>
            <div class="row mb-3" style="margin-left:80px">
                <div class="col-lg-4">
                    <label>Doctor</label>
                    <select class="select2 form-control custom-select doctor-select2" id="id_dokter" name="id_dokter">
                        <option value ="">Semua dokter</option>
                        @foreach ($dataDoctor as $dokter_id => $dokter_nama)
                        <option value="{{ $dokter_nama }}" {{ ( $dokter_id == $selectedIdDoc) ? 'selected' : '' }}>
                            {{ $dokter_nama }}
                        </option>
                        @endforeach                   
                    </select>
                </div>
                <div class="col-lg-3">
                    <label>Start Date <small class="text-muted">dd/mm/yyyy</small></label>
                    <input type="text" class="form-control datepicker" id="start_date" required="">
                </div>
                <div class="col-lg-3">
                    <label>End Date <small class="text-muted">dd/mm/yyyy</small></label>
                    <input type="text" class="form-control datepicker" id="end_date" required="">
                </div>
                <div class="col-lg-2">
                    <br />
                    <button class="btn btn-success btn-lg" onclick="getFilter();"><i class="fas fa-filter"></i></button>
                    <button class="btn btn-danger btn-lg" onclick="getPdf();"><i class="far fa-file-pdf"></i></button>
                </div>
            </div>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="filter">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection

@push('js')
<script>
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });

    $("#id_dokter").select2({
        
            
    });

    function getFilter(){
        var doctor = $("#id_dokter").val();
        var startDate = $("#start_date").val();
        var endDate = $("#end_date").val();
        // console.log(endDate);

        jQuery.ajax({
            type: "GET",
            url: "{{ route('api-filter') }}",
            data: {doctor_name:doctor, start:startDate, end:endDate},
            success: function (data) {
                
            $("#filter").empty()
            console.log(data.values)
            data.values.forEach(dataFilter => {
                $("#filter").append("<tr><td class=id>" + dataFilter.nama_dokter + "</td>\
                <td class=nama_pasien>" + dataFilter.nama_pasien + "</td>\
                <td class=status>" + dataFilter.anamnesia + "</td>\
                <td><a class='btn btn-info btn-md'> <span style='color: white;'><i class='fas fa-eye'></i></span></a></td>");
                    }
                );
            },
            async: false
        })    
    }

    function getPdf(){
        var doctor = $("#id_dokter").val();
        var startDate = $("#start_date").val();
        var endDate = $("#end_date").val();
        var base =  "{{ route('api-pdf') }}";
        var url = "?doctor_name=" + doctor + "&start=" + startDate + "&end=" + endDate;
        // console.log(endDate);
        window.open (base+url , "_blank" );
    }

    $('#zero_config').DataTable({
                    "bLengthChange": false,
                    "bFilter": false,
                    "bInfo": false,
                    "bAutoWidth": false 
                    });
</script>
@endpush