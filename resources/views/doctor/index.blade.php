@extends('layout.master')
@section('judul_halaman','Doctors')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a class="btn btn-primary btn-md" href="{{ route('doctor.create') }}">
                    <i class=" fas fa-plus"></i>&nbsp; Create New Doctor
                </a> 
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>SIP</th>
                            <th>Telephone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->nama_dokter }}</td>
                            <td>{{ $doctor->sip }}</td>
                            <td>{{ $doctor->no_telp }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('doctor.show',$doctor->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href="{{ route('doctor.edit',$doctor->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                <a class="btn btn-danger btn-sm" href="{{ route('doctor.index') }}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $('#zero_config').DataTable();
</script>
@endpush