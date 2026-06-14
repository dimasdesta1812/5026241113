@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <div class="d-flex justify-content-between align-items-center">
        <h2>Keranjang Belanja</h2>
        <a href="/keranjang/tambah" class="btn btn-primary">Beli</a>
    </div>

    <br />


    <table class="table table-striped table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjang as $item)
                @php
                    $total = $item->Jumlah * $item->Harga;
                @endphp
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($total, 0, ',', '.') }}</td>
                    <td>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
