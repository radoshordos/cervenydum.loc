@if ($notification = Session::get('success'))
    <div class="row flex-spaces">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $notification }}</strong>
    </div>
@endif
@if ($notification = Session::get('error'))
    <div class="row flex-spaces">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $notification }}</strong>
    </div>
@endif
@if ($notification = Session::get('warning'))
    <div class="row flex-spaces">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $notification }}</strong>
    </div>
@endif
@if ($notification = Session::get('info'))
    <div class="row flex-spaces">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $notification }}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="row flex-spaces">
        @foreach($errors->all() as $error)
            <input class="alert-state" id="alert-{{ md5($error) }}" type="checkbox">
            <div class="alert alert-danger dismissible">
                {{ $error }}
                <label class="btn-close" for="alert-{{ md5($error) }}">X</label>
            </div>
        @endforeach
    </div>
@endif
