@extends('layout.master')
@section('judul_halaman','Medical Records')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a class="btn btn-primary btn-md" href="{{ route('medical_record.create') }}">
                    <i class=" fas fa-plus"></i>&nbsp; Create New Medical Record
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
                            <th>Doctor</th>
                            <th>Patient</th>
                            <th>Anamnesia</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicalRecords as $medicalRecord)
                        <tr>
                            <td>{{ $medicalRecord->id_dokter }}</td>
                            <td>{{ $medicalRecord->id_pasien }}</td>
                            <td>{{ $medicalRecord->anamnesia }}</td>
                            <td>{{ $medicalRecord->riwayat_perjalanan_penyakit }}</td>
                            <td>{{ $medicalRecord->pemeriksaan_fisik }}</td>
                            <td>{{ $medicalRecord->penemuan_klinik }}</td>
                            <td>{{ $medicalRecord->diagnosa }}</td>
                            <td>{{ $medicalRecord->obat_rs }}</td>
                            <td>{{ $medicalRecord->tindakan_rs }}</td>
                            <td>{{ $medicalRecord->kondisi_pulang }}</td>
                            <td>{{ $medicalRecord->anjuran_kontrol }}</td>
                            <td>{{ $medicalRecord->alasan_pulang }}</td>
                            <td>{{ $medicalRecord->obat_pulang }}</td>
                            <td>{{ $medicalRecord->ttd_dokter }}</td>
                            <td>{{ $medicalRecord->nama_dokter }}</td>
                            <td>{{ $medicalRecord->tanggal_pulang }}</td>
                            <td>{{ $medicalRecord->jam_pulang }}</td>
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