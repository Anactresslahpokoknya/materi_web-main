<?php

namespace App\Http\Controllers;

use App\Models\Pasok;
use Illuminate\Http\Request;

class PasokController extends Controller
{
    //

    public function pasok()
    {
        return view('data_pasok');
    }

    public function validasi_pasok()
    {
        $m = new Pasok();
        return view('data_pasok', ['data_pasok' => $m->all()]);
    }

}
