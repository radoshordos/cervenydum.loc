<?php

namespace App\Http\Controllers;

use App\Models\Apartment;

class BytyController extends Controller
{
    public function index()
    {
        return view('byty', [
            'apartments' => Apartment::orderBy('id')->get()
        ]);
    }
}
