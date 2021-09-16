@extends('layout.master')
@section('judul_halaman','Doctors')

@section('content')

<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <button type="button" class="btn btn-primary btn-md">
                <i class=" fas fa-plus"></i> Doctor
            </button>
        </h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>SIP</th>
                        <th>Telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_dokter as $dokter)
                    <tr>
                        <td>{{ $dokter->nama_dokter }}</td>
                        <td>{{ $dokter->sip }}</td>
                        <td>{{ $dokter->no_telp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
@push('js')
<script>
    $('#zero_config').DataTable();
</script>
@endpush