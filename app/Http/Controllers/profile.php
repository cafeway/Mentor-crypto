<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    //
    public function index()
    {
        return view('user.profile');
        # code...
    }
    public function post(Request $req)
    {
        dd($req);
        # code...
    }
}
