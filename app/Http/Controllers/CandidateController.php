<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoptavka;
use App\Models\Byt;
use App\Models\Candidate;
use Illuminate\Http\RedirectResponse;
use Log;

class CandidateController extends Controller
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

        Log::debug($v);

        $x = Candidate::create($request->validated());


        return redirect()->route('zajemci.index')->with('success','Děkujeme za podání poptávky');
    }
}
