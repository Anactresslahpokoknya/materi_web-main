<?php

namespace App\Http\Controllers;

use App\Models\Detail_Penjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    //
    public function tpenjualan()
    {
        return view('tpenjualan');
    }

    public function laporan()
    {
        return view('laporan');
    }

    public function beranda()
    {
        return view('beranda');
    }

   
}
