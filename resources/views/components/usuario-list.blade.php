<select name="idusuario" class="form-control border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded">
  
    @foreach($usuarios as $usuario)
        <option value="{{ $usuario->id }}" {{ (isset($idseleccionar) && $idseleccionar == $usuario->id) ? 'selected' : '' }}>{{ $usuario->email }}</option>
    @endforeach
</select>
