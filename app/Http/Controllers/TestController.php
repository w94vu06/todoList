<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return "Not OK" ;
    }
    public function snail()
    {
        return "snail say hi";
    }
}
