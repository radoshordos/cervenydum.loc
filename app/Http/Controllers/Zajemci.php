<?php

namespace App\Http\Controllers;

use App\Models\Byt;

class Zajemci extends Controller
{
    public function index()
    {
        return view('zajemci', [
            'byty' => Byt::orderBy('id')->get()
        ]);
    }
}
