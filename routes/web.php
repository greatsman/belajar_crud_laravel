<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route CRUD
Route::get('/pegawai','PegawaiController@index');//halaman index
Route::get('/pegawai/tambah','PegawaiController@tambah');//halaman tambah
Route::post('/pegawai/store','PegawaiController@store');//route untuk proses tambah pada pegawai
Route::get('/pegawai/edit/{id}','PegawaiController@edit');//route untuk edit data pegawai
Route::post('/pegawai/update','PegawaiController@update');//route untuk proses edit data pegawai
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');//route untuk hapus

//paginate
Route::get('/pegawai_paginate','PegawaiControllerPaginate@index');
//mencari
Route::get('/pegawai/cari','PegawaiController@cari');