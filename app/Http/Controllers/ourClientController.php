<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ourClientController extends Controller
{
    //

    public function index()
    {
        return view('our_client.index');
    }
}
