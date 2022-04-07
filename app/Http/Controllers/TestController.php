<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return view('welcome') ;
        return "OK" ;
    }

    public function master()
    {
        return view('layouts.master') ;
    }
}
