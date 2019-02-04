@inject('cities', 'App\City')

<select name="city" id="city" class="form-control form-control-sm">
    <option>Select city</option>
    @foreach ($cities->all() as $city)
        <option value="{{ $city->id }}" >{{ $city->name }}</option>
    @endforeach
</select>