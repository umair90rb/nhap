@inject('areas', 'App\Area')

<select name="area" id="area" class="form-control form-control-sm">
    <option>Select Area</option>
    @foreach ($areas->all() as $area)
        <option value="{{ $area->id }}" >{{ $area->name }}</option>
    @endforeach
</select>