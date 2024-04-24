<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function dbuku()
    {
        return view('dbuku');
    }

    public function validasi_buku()
    {
        $m = new Buku();
        return view('dbuku', ['data_buku' => $m->all()]);
    }
}
