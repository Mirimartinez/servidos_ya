<div>
    <label>Rol: </label>
    <input class="form-control" type="text" name="rol" id="rol" value="{{ $permiso->idrol ?? '' }}">
    <br>
</div>
<div>
    <label>Proceso: </label>
    <input class="form-control" type="text" name="proceso" id="proceso" value="{{ $permiso->proceso ?? '' }}">
    <br>
</div>

<button class="form-control" type="submit">Guardar</button>
