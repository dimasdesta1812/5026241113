@extends('template')
@section('title', 'Tambah Hewan')
@section('konten')

<h2>Tambah Data Hewan</h2>

<form action="{{ route('simpanhewan') }}" method="POST">
    @csrf

    <p>
        <label>Nama Hewan</label><br>
        <input type="text" name="namahewan" id="namahewan" maxlength="30">
    </p>

    <p>
        <label>Jumlah Hewan</label><br>
        <input type="text" name="jumlahhewan" id="jumlahhewan">
    </p>

    <p>
        <label>Tersedia</label><br>
        <input type="text" name="tersedia" id="tersedia">
    </p>

    <button type="submit">Simpan</button>
</form>

@endsection
