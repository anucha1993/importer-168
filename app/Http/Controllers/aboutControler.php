<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutControler extends Controller
{
    //

    public function index()
    {
        return view('about.index');
    }
}
