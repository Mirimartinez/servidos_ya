<div>
    <label>Nombre: </label>
    <input class="form-control m-2 text-center" type="text" name="nombre" id="nombre" value="{{ $usuario->nombre ?? '' }}">
</div>
<div>
    <label>Password: </label>
    <input class="form-control m-2 text-center" type="password" name="password" id="password" value="{{ $usuario->password ?? '' }}">
</div>
<div>
    <label>Rol: </label>
    <input class="form-control m-2 text-center" type="text" name="idrol" id="idrol" value="{{ $usuario->idrol ?? '' }}">
</div>
<div>
    <label>Activo: </label>
    <input class="form-control m-2 text-center" type="radio" name="activo" id="activo" value="{{ $usuario->idrol ?? '' }}">
</div>
<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
