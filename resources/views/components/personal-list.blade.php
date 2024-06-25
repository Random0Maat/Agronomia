<select name="idcliente"  class="form-control border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded">
    @foreach($personals as $personal)
        <option value="{{ $personal->id }}" {{ (isset($idseleccionar) && $idseleccionar == $personal->id) ? 'selected' : '' }}>{{$personal->id}} - {{ $personal->nombre }}</option>
    @endforeach
</select>