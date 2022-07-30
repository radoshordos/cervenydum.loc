<h3 class="sidebar-title" style="text-align:center">Informace</h3>
<div class="row">
    <div class="collapsible full-width">
        <input id="collapsible-components" type="radio" name="collapsible">
        <label for="collapsible-components"><a href="{{ URL::asset('/') }}">Aktuality</a></label>
        <label for="collapsible-components"><a href="{{ route('souvisejici.index') }}">Související projekty</a></label>
        <label for="collapsible-components"><a href="{{ route('byty.index') }}">Byty</a></label>
        <label for="collapsible-components"><a href="{{ route('zajemci.index') }}">Pro zájemnce</a></label>
    </div>
</div>
