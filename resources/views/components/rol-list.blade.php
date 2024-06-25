<select name="idrol" class="form-control border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded">
    @foreach($roles as $rol)
        <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
    @endforeach
</select>