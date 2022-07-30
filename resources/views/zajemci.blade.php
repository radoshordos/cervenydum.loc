@extends('layouts.layout')

@section('title', 'Poptat nemovitost')

@section('content')
    {{ Form::open(['route' => 'zajemci.store']) }}
    <div class="paper container margin-bottom-large">
        <h4>Poptat nemovitost?</h4>
        <div class="row">
            <div class="col sm-12">
                <div class="form-group">
                    <label for="byt_id">Zájem o</label>
                    <select id="byt_id" required>
                        <option value=""></option>
                        @foreach($byty as $byt)
                            <option value="{{ $byt->id }}">{{ $byt->value }}</option>
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
                    <label class="paper-switch">
                        <input id="agreement" name="agreement" type="checkbox" required/>
                        <span class="paper-switch-slider round"></span>
                    </label>
                    <label for="agreement" class="paper-switch-label">
                        <br/> <!-- https://www.luxent.cz/obchodni-a-pravni-ujednani/  -->
                        * Souhlasím se zpracováním a uchováním osobních údajů. Úplné znění podmínek naleznete <a>zde</a>.
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
@endsection
