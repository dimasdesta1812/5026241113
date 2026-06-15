@extends('template')
@section('title', 'Kode Soal mykaryawan')
@section('konten')

<h2>Kode Soal mykaryawan</h2>
<br><br>

    <div class="row mb-3">
        <label class="col-sm-2">Kode Pegawai</label>
        <div class="col-sm-10">
            <input type="text" value="{{ $karyawan->kodepegawai }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" value="{{ ucwords(strtolower($karyawan->namalengkap)) }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2">Divisi</label>
        <div class="col-sm-10">
            <input type="text" value="{{ $karyawan->divisi }}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2">Departemen</label>
        <div class="col-sm-10">
            <input type="text" value="{{ $karyawan->departemen }}" readonly>
        </div>
    </div>

    <br>
    <a href="{{ route('eas') }}" class="btn btn-warning">Kembali</a>

@endsection
