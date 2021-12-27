<div>
    <label>Rol: </label>
    <input class="form-control m-2 text-center" type="text" name="rol" id="rol" value="{{ $permiso->idrol ?? '' }}">
</div>
<div>
    <label>Proceso: </label>
    <input class="form-control m-2 text-center" type="text" name="proceso" id="proceso" value="{{ $permiso->proceso ?? '' }}">
</div>

<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
