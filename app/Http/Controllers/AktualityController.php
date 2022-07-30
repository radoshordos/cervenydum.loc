<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktualityController extends Controller
{
    public function index()
    {
        return view('aktuality');
    }
}
