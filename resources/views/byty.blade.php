@extends('layouts.layout')

@section('title', 'Byty')

@section('content')
    <div class="paper container margin-bottom-large">
        <table>
            <thead>
            <tr>
                <th>Dispozice</th>
                <th>Typ / m<sup>2</sup></th>
                <th>Lodžie / Sklep / Garáž</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            @foreach($apartments as $apartment)
                <tr>
                    <td>{{ $apartment->floor }}</td>
                    <td>{{ $apartment->byty->name }} / {{ str_replace('.',',', $apartment->byty->useful_area) }} m<sup>2</sup></td>
                    <td>{{ $apartment->loggia }} / {{ $apartment->cellar }} / {{ $apartment->garage }}</td>
                    <td>
                        @if($apartment->selling_status !== \App\Models\Apartment::SELL_WORD)
                            {{ $apartment->selling_status }}
                        @else
                            {{ $apartment->selling_price }} Kč
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="paper container margin-bottom-large">
        <h4>Typy bytů - verze roku 2020</h4>

        <strong>Typ "A" a typ "B"</strong>
        <a href="/pdf/04-pudorys-2-5np.pdf">
            <img src="/png/04-pudorys-2-5np.png" style="margin: 1em" alt="">
        </a>
        <strong>Typ "C"</strong>
        <a href="/pdf/05-pudorys-6np.pdf">
            <img src="/png/05-pudorys-6np.png" style="margin: 1em" alt="">
        </a>
        <strong>Nebytový prostor</strong>
        <a href="/pdf/02-pudorys-1np.pdf">
            <img src="/png/02-pudorys-1np.png" style="margin: 1em" alt="">
        </a>
    </div>

@endsection
