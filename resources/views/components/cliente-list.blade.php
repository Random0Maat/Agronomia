<select name="idcliente"  class="form-control border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded">
    @foreach($clientes as $cliente)
        <option value="{{ $cliente->id }}" {{ (isset($idseleccionar) && $idseleccionar == $cliente->id) ? 'selected' : '' }}>{{$cliente->id}} - {{ $cliente->getDatos()->nombre }}</option>
    @endforeach
</select>