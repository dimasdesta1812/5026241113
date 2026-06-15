@extends('template')
@section('title', 'Kode Soal mykaryawan')
@section('konten')

<h2>Kode Soal mykaryawan</h2>
<br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @foreach ($mykaryawan as $row)
        <tr>
            <td>{{ $row->kodepegawai }}</td>
            <td>{{ ucwords(strtolower($row->namalengkap)) }}</td>
            <td>{{ $row->divisi }}</td>
            <td>{{ $row->departemen }}</td>
            <td><a href="{{ route('viewmykaryawan', $row->kodepegawai) }}" class="btn btn-info">View</a></td>
        </tr>
        @endforeach
    </table>

@endsection
