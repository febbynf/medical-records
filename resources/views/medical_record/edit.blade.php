@extends('layout.master')
@section('judul_halaman','Edit Medical Record')
@section('main_halaman','Medical Records')
@section('halaman','Edit')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal" action="{{ route('medical-record.update',$medicalRecord->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                            <h4 class="card-title text-right"> 
                                <a class="btn btn-primary" href="{{ route('medical-record.index') }}"> Back</a>
                            </h4>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Doctor</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select doctor-select2" id="id_dokter" name="id_dokter">
                                        @foreach ($dataDoctor as $dokter_id => $dokter_nama)
                                            <option value="{{ $dokter_id }}" {{ ( $dokter_id == $medicalRecord->id_dokter ) ? 'selected' : '' }}>
                                                {{ $dokter_nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Patient</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" id="id_pasien"  name="id_pasien">
                                        @foreach ($dataPatient as $pasien_id => $pasien_nama)
                                            <option value="{{ $pasien_id }}" {{ ( $pasien_id == $medicalRecord->id_pasien ) ? 'selected' : '' }}>
                                                {{ $pasien_nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Anamnesia</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="anam1" name="anamnesia" value="1" {{ $medicalRecord->anamnesia == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="anam1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="anam2" name="anamnesia" value="0" {{ $medicalRecord->anamnesia == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="anam2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Riwayat Penyakit</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="rpp1" name="riwayat_perjalanan_penyakit"  value="1" {{ $medicalRecord->riwayat_perjalanan_penyakit == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="rpp1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="rpp2" name="riwayat_perjalanan_penyakit"  value="0" {{ $medicalRecord->riwayat_perjalanan_penyakit == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="rpp2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Pemeriksaan Fisik</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="pf1" name="pemeriksaan_fisik"  value="1" {{ $medicalRecord->pemeriksaan_fisik == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="pf1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="pf2" name="pemeriksaan_fisik"  value="0" {{ $medicalRecord->pemeriksaan_fisik == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="pf2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Penemuan Klinik</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="pk1" name="penemuan_klinik"  value="1" {{ $medicalRecord->penemuan_klinik == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="pk1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="pk2" name="penemuan_klinik"  value="0" {{ $medicalRecord->penemuan_klinik == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="pk2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Diagnosa</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="diag1" name="diagnosa"  value="1" {{ $medicalRecord->diagnosa == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="diag1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="diag2" name="diagnosa"  value="0" {{ $medicalRecord->diagnosa == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="diag2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Obat RS</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ors1" name="obat_rs"  value="1" {{ $medicalRecord->obat_rs == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ors1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ors2" name="obat_rs"  value="0" {{ $medicalRecord->obat_rs == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ors2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Tindakan RS</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="trs1" name="tindakan_rs"  value="1" {{ $medicalRecord->tindakan_rs == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="trs1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="trs2" name="tindakan_rs"  value="0" {{ $medicalRecord->tindakan_rs == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="trs2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Kondisi Pulang</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="kp1" name="kondisi_pulang"  value="1" {{ $medicalRecord->kondisi_pulang == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="kp1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="kp2" name="kondisi_pulang"  value="0" {{ $medicalRecord->kondisi_pulang == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="kp2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Anjuran Kontrol</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ak1" name="anjuran_kontrol"  value="1" {{ $medicalRecord->anjuran_kontrol == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ak1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ak2" name="anjuran_kontrol"  value="0" {{ $medicalRecord->anjuran_kontrol == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ak2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Alasan Pulang</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ap1" name="alasan_pulang"  value="1" {{ $medicalRecord->alasan_pulang == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ap1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ap2" name="alasan_pulang"  value="0" {{ $medicalRecord->alasan_pulang == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ap2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Obat Pulang</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="op1" name="obat_pulang"  value="1" {{ $medicalRecord->obat_pulang == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="op1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="op2" name="obat_pulang"  value="0" {{ $medicalRecord->obat_pulang == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="op2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Ttd Dokter</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ttd1" name="ttd_dokter"  value="1" {{ $medicalRecord->ttd_dokter == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ttd1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ttd2" name="ttd_dokter"  value="0" {{ $medicalRecord->ttd_dokter == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="ttd2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Nama Dokter</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="nd1" name="dokter"  value="1" {{ $medicalRecord->dokter == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="nd1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="nd2" name="dokter"  value="0" {{ $medicalRecord->dokter == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="nd2">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Tanggal Pulang</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="tp1" name="tanggal_pulang"  value="1" {{ $medicalRecord->tanggal_pulang == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="tp1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="tp2" name="tanggal_pulang"  value="0" {{ $medicalRecord->tanggal_pulang == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="tp2">Tidak</label>
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Jam Pulang</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="jp1" name="jam_pulang"  value="1" {{ $medicalRecord->jam_pulang == "1" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="jp1">Lengkap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="jp2" name="jam_pulang"  value="0" {{ $medicalRecord->jam_pulang == "0" ? "checked" : "" }} required>
                                        <label class="custom-control-label" for="jp2">Tidak</label>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    <div class="border-top">
                        <div class="card-body text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection