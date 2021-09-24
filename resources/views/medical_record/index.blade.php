@extends('layout.master')
@section('judul_halaman','Medical Records')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a class="btn btn-primary btn-md" href="{{ route('medical-record.create') }}">
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
                            <th>R1</th>
                            <th>R2</th>
                            <th>R3</th>
                            <th>R4</th>
                            <th>R5</th>
                            <th>R6</th>
                            <th>R7</th>
                            <th>R8</th>
                            <th>R9</th>
                            <th>R10</th>
                            <th>R11</th>
                            <th>R12</th>
                            <th>R13</th>
                            <th>R14</th>
                            <th>R15</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ $medicalRecords }} --}}
                        @foreach($medicalRecords as $medicalRecord)
                        <tr>
                            <td>{{ $medicalRecord->nama_dokter }}</td>
                            <td>{{ $medicalRecord->nama_pasien }}</td>
                            <td>{!! $medicalRecord->anamnesia == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->riwayat_perjalanan_penyakit == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->pemeriksaan_fisik == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">'!!}</td>
                            <td>{!! $medicalRecord->penemuan_klinik == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->diagnosa == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->obat_rs == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->tindakan_rs == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->kondisi_pulang == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->anjuran_kontrol == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->alasan_pulang == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->obat_pulang == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->ttd_dokter == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->dokter == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->tanggal_pulang == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>{!! $medicalRecord->jam_pulang == 1 ? '<i class="fas fa-check-circle" style="color:green;">' : '<i class="fas fa-times-circle" style="color:red;">' !!}</td>
                            <td>
                                <form action="{{ route('medical-record.destroy',$medicalRecord->id) }}" method="POST">
                                    {{-- <a class="btn btn-info btn-sm" href="{{ route('medical-record.show',$medicalRecord->id) }}"><i class="fas fa-eye"></i></a> --}}
                                    <a class="btn btn-warning btn-sm" href="{{ route('medical-record.edit',$medicalRecord->id) }}"><i class="fas fa-pencil-alt"></i></a>
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