<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mykaryawanController extends Controller
{

    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->get();
        return view('mykaryawan', compact('mykaryawan'));
    }

    public function show($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('viewmykaryawan', compact('karyawan'));
    }

}
