@extends('template')
@section('title', 'Tambah Belanja')
@section('konten')

    <h3>Tambah Data Belanja</h3>
    <br/>

    <div class="row">
        <div class="col-md-6">
            <form action="/keranjang/simpan" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="KodeBarang" class="form-label">Kode Barang</label>
                    <input type="number" name="KodeBarang" class="form-control" required="required" placeholder="Masukkan kode barang">
                </div>

                <div class="mb-3">
                    <label for="Jumlah" class="form-label">Jumlah Pembelian</label>
                    <input type="number" name="Jumlah" class="form-control" required="required" placeholder="Masukkan jumlah item">
                </div>

                <div class="mb-3">
                    <label for="Harga" class="form-label">Harga per Item</label>
                    <input type="number" name="Harga" class="form-control" required="required" placeholder="Masukkan harga">
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
                <a href="/keranjang" class="btn btn-secondary"> Kembali</a>
            </form>
        </div>
    </div>
@endsection
