<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class login extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
        # code...
    }
    public function post(Request $req)
    {
        dd($req);
        # code...
    }
}
