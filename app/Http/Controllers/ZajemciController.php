<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoptavka;
use App\Models\Byt;
use App\Models\Poptavka;

class ZajemciController extends Controller
{
    public function index()
    {
        return view('zajemci', [
            'byty' => Byt::orderBy('id')->get()
        ]);
    }

    public function store(StorePoptavka $request)
    {
        $v = $request->validated();
        Poptavka::created($v);

        return redirect()->route('zajemci.index')->with('Dekujeme ua podání poptávky');
    }
}
