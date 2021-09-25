@extends('layout.master')
@section('judul_halaman','Report Medical Records')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title m-b-0"></h5>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <label>Doctor</label>
                    <select class="select2 form-control custom-select doctor-select2" id="id_dokter" name="id_dokter">
                                    
                            <option value="nama">
                            dokter
                            </option>
                        
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>Start Date <small class="text-muted">dd/mm/yyyy</small></label>
                    <input type="text" class="form-control datepicker">
                </div>
                <div class="col-lg-4">
                    <label>End Date <small class="text-muted">dd/mm/yyyy</small></label>
                    <input type="text" class="form-control datepicker">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(".datepicker").datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true,
          todayHighlight: true,
    });
</script>
@endpush