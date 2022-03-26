@extends('layouts.layout')

@section('content')

    {!! Form::open(['url' => '']) !!}


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
                {{ Form::text('name', null, ['id' => 'name', 'class' => 'input-block']) }}
            </div>
        </div>
        <div class="col sm-8">
            <div class="form-group">
                {{ Form::label('surname', 'Příjmení') }}
                {{ Form::text('surname', null, ['id' => 'surname', 'class' => 'input-block']) }}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col sm-4">
            <div class="form-group">
                {{ Form::label('phone', 'Telefon') }}
                {{ Form::tel('phone', null, ['id' => 'phone', 'class' => 'input-block']) }}
            </div>
        </div>
        <div class="col sm-8">
            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, ['id' => 'email', 'class' => 'input-block']) }}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
