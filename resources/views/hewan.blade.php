@extends('template')
@section('title', 'Data Hewan')
@section('konten')

<h2>Data Hewan</h2>
<br><br>
<a href="{{ route('tambahhewan') }}" class="btn btn-warning">Tambah Data</a>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Hewan</th>
        <th>Nama Hewan</th>
        <th>Jumlah Hewan</th>
        <th>Tersedia</th>
    </tr>

    @foreach ($hewan as $row)
    <tr>
        <td>{{ $row->kodehewan }}</td>
        <td>{{ $row->namahewan }}</td>
        <td>{{ $row->jumlahhewan }}</td>
        <td>{{ $row->tersedia }}</td>
    </tr>
    @endforeach
</table>

@endsection
