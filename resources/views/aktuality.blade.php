@extends('layouts.layout')
@section('title', 'Aktuality')

@section('content')

    <div class="paper container margin-bottom-large">
        <h4>12.07.2022 - Získali jsme stavební povolení</h4>
        <a target="_blank" href="/foto/big-stavba-povolena.jpg">
            <img src="/foto/big-stavba-povolena.jpg" style="margin-top: 1em" alt="Stavba povolena">
        </a>
    </div>

    <div class="paper container margin-bottom-large">
        <h4>24.04.2022 - Poloha stavby</h4>

        <a target="_blank" style="text-decoration: none" href="https://www.google.com/maps/place/49%C2%B047'01.5%22N+14%C2%B041'07.7%22E/@49.7837419,14.6849178,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x79e25c2c591e2d62!7e2!8m2!3d49.7837413!4d14.6854651">

            <div class="row">
                <div class="col-1"><img style="border: none" src="{{ asset('/image/gmaps_icon.svg') }}" width="40" alt=""/></div>
                <div class="col">Poloha na google mapách - GPS: 49.78375N, 14.68547E</div>
            </div>
        </a>


        <a target="_blank" href="/png/01-situace.png">
            <img src="/png/01-situace.png" style="margin-top: 1em" alt="">
        </a>
    </div>
@endsection
