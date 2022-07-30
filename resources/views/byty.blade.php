@extends('layouts.layout')

@section('title', 'Byty')

@section('content')

    <div class="paper container margin-bottom-large">
        <table>
            <thead>
            <tr>
                <th>Dispozice</th>
                <th>Typ</th>
                <th>Terasa / Sklep / Garáž</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1 NP</td>
                <td>Nebytový prostor – I</td>
                <td>NE / NE / NE</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>1 NP</td>
                <td>Nebytový prostor – II</td>
                <td>NE / NE / NE</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>2 NP</td>
                <td>Byt "A" – 2+kk</td>
                <td>9,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>2 NP</td>
                <td>Byt "B" – 3+kk</td>
                <td>11,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>3 NP</td>
                <td>Byt "A" – 2+kk</td>
                <td>9,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>3 NP</td>
                <td>Byt "B" – 3+kk</td>
                <td>11,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>4 NP</td>
                <td>Byt "A" – 2+kk</td>
                <td>9,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>4 NP</td>
                <td>Byt "B" – 3+kk</td>
                <td>11,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>5 NP</td>
                <td>Byt "A" – 2+kk</td>
                <td>9,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>5 NP</td>
                <td>Byt "B" – 3+kk</td>
                <td>11,6 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            <tr>
                <td>6 NP</td>
                <td>Byt "C" – 4+kk</td>
                <td>44,0 m<sup>2</sup> / ANO / ANO 1x</td>
                <td>Nestanovena</td>
            </tr>
            </tbody>
        </table>


    </div>

    <div class="paper container margin-bottom-large">
        <h4>Typy bytů</h4>

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
