@extends('layouts.layout')
@section('title', 'Poptat nemovitost')

@section('content')
    @if (session('success'))
        <div class="alert alert-success dismissible">
            {{ session('success') }}
            <label class="btn-close" for="alert-3">X</label>
        </div>
    @else
        {{ Form::open(['route' => 'zajemci.store']) }}
        <div class="paper container margin-bottom-large">
            <h4>Poptat nemovitost?</h4>
            <div class="row">
                <div class="col sm-12">
                    <div class="form-group">
                        {{ Form::label('byt_id', 'Zájem o') }}
                        <select id="byt_id" name="byt_id" required>
                            <option value=""></option>
                            @foreach($byty as $byt)
                                <option value="{{ $byt->id }}">{{ $byt->name }}</option>
                            @endforeach
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
                        {{ Form::tel('phone', null, ['id' => 'phone', 'required', 'class' => 'input-block', 'minlength' => 9, 'maxlength' => 9, 'placeholder' => '602XXXXXX']) }}
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
                <div class="col">
                    <fieldset class="form-group">
                        <label for="agreement" class="paper-check">
                            <input type="checkbox" name="agreement" id="agreement" required>
                            <span>* Souhlasím se zpracováním a uchováním osobních údajů. Úplné znění podmínek naleznete <a href="">zde</a></span>
                        </label>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row flex-center">
                        <div class="col-8 col">
                            <button class="btn-success paper-btn btn-primary-outline btn-block">Odeslat poptávku</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    @endif
@endsection
