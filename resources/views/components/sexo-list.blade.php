<select name="sexo" class="form-control border border-primary focus:border border-primary-subtle shadow-sm bg-body-tertiary rounded">
    
        <option value="M" {{ (isset($seleccionado) && $seleccionado == 'M') ? 'selected' : '' }}>MASCULINO</option>
        <option value="F" {{ (isset($seleccionado) && $seleccionado == 'F') ? 'selected' : '' }}>FEMENINO</option>

</select>

