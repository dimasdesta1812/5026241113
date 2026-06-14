@extends('template')
@section('title', 'Tambah Data Mahasiswa')
@section('konten')

    <h2>Tambah Nilai Kuliah</h2>


    <form action="/nilaikuliah/simpan" method="POST">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="6">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" id="NilaiAngka" maxlength="11">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" id="SKS" maxlength="11">
        </p>
        <button type="submit">Simpan</button>
    </form>
@endsection
