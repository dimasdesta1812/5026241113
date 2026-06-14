<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
    {
        $hewan = DB::table('hewan')->get();
        return view('hewan', compact('hewan'));
    }

    public function create()
    {
        return view('tambahhewan');
    }

    public function store(Request $request)
{
    DB::table('hewan')->insert([
        'namahewan'   => $request->namahewan,
        'jumlahhewan' => $request->jumlahhewan,
        'tersedia'    => $request->tersedia,
    ]);

    return redirect('/hewan');
}
}
