<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //
    public function Entry(Request $request)
    {
        $N = new Penjualan();
        $N->create([
            'id_penjualan' => $request->id_penjualan,
            'id_kasir' => $request->id_kasir,
            'tanggal' => $request->tanggal,
            'total' => $request->total,
        ]);

        return back()->with('pesan', 'selamat, registrasi berhasil');
    }

    public function validasi_laporan()
    {
        $m = new Penjualan();
        return view('laporan', ['laporan' => $m->all()]);
    }

}
