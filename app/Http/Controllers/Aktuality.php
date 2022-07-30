<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aktuality extends Controller
{
    public function index()
    {
        return view('aktuality');
    }
}
