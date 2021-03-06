<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiControllerPaginate extends Controller
{
    //
    public function index()
	{
    	        // mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->paginate(10);
 
    	        // mengirim data pegawai ke view index
		return view('index_paginate',['pegawai' => $pegawai]);
 
	}
}
