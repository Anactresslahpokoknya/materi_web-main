<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    //
    public function loginKasir()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logika(Request $request)
    {

        $p = new Kasir();

        $p = $p->where('username', $request->input('username'))->where('password', $request->input('password'));

        if ($p->exists()) {

            session([

                'username' => $request->input('username'),

                'password' => $request->input('password'),
            ]);

            return redirect('dashboard');

        }

    }


}

