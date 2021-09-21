@extends('layout.master')
@section('judul_halaman','Patients')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a class="btn btn-primary btn-md" href="{{ route('patient.create') }}">
                    <i class=" fas fa-plus"></i>&nbsp; Create New Patient
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
                            <th>Telephone</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->nama_pasien }}</td>
                            <td>{{ $patient->no_telp }}</td>
                            <td>{{ $patient->alamat }}</td>
                            <td>
                                <form action="{{ route('patient.destroy',$patient->id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('patient.show',$patient->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('patient.edit',$patient->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type= "submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                </form>
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