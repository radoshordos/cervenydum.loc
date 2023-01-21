<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoptavka;
use App\Models\Byt;
use App\Models\Poptavka;
use Illuminate\Http\RedirectResponse;

class CandidatesController extends Controller
{
    public function index()
    {
        return view('zajemci', [
            'byty' => Byt::orderBy('id')->get()
        ]);
    }

    public function store(StorePoptavka $request): RedirectResponse
    {
        $v = $request->validated();
        dd($v, Poptavka::created($v));
        return redirect()->route('zajemci.index')->with('success','Děkujeme za podání poptávky');
    }
}
