<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
        # code...
    }
    function post(Request $req)
    {
        # code...
        dd($req);
    }
}
