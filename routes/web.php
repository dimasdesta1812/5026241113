<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {

    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan1', function () {
	return view('pertemuan1');
});

Route::get('pertemuan2', function () {
	return view('pertemuan2');
});

Route::get('pertemuan3', function () {
	return view('pertemuan3');
});

Route::get('pertemuan4', function () {
	return view('pertemuan4');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('tugaslinktree', function () {
	return view('tugaslinktree');
});

Route::get('tugasbootstrap', function () {
	return view('tugasbootstrap');
});

Route::get('main', function () {
	return view('main');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);
