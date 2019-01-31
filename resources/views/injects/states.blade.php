@inject('states', 'App\State')

<select name="state" id="state" class="form-control form-control-sm">
    <option>Select State</option>
    @foreach ($states->all() as $state)
        <option value="{{ $state->id }}" >{{ $state->name }}</option>
    @endforeach
</select>