@extends('layouts.layout')

@section('content')
    {!! Form::open(['url' => '']) !!}

    <div class="paper container margin-bottom-large">
        <h4>Máte zájem o byt?</h4>
        <div class="row">
            <div class="col sm-12">
                <div class="form-group">
                    <label for="typ-bytu">Zájem o</label>
                    <select id="typ-bytu" required>
                        <option value=""></option>
                        <option value="1">Velikost bytu 2kk</option>
                        <option value="2">Velikost bytu 3kk</option>
                        <option value="3">Velikost bytu 4kk</option>
                        <option value="3">Nebytový prostor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col sm-4">
                <div class="form-group">
                    {{ Form::label('name', 'Jméno') }}
                    {{ Form::text('name', null, ['id' => 'name', 'required', 'class' => 'input-block']) }}
                </div>
            </div>
            <div class="col sm-8">
                <div class="form-group">
                    {{ Form::label('surname', 'Příjmení') }}
                    {{ Form::text('surname', null, ['id' => 'surname', 'required', 'class' => 'input-block']) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col sm-4">
                <div class="form-group">
                    {{ Form::label('phone', 'Telefon') }}
                    {{ Form::tel('phone', null, ['id' => 'phone', 'required', 'class' => 'input-block']) }}
                </div>
            </div>
            <div class="col sm-8">
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, ['id' => 'email', 'required', 'class' => 'input-block']) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row flex-center">
                    <div class="col-8 col">
                        <button class="btn-success btn-block">Odeslat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
