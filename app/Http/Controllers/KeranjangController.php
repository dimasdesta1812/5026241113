<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{

    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->get();
        return view('keranjang', compact('keranjang'));
    }

    public function create()
    {
        return view('tambahkeranjang');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect('/keranjang');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang')->with('success', 'Pembelian berhasil dibatalkan!');
    }
}
