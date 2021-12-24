<div>
    <label>Nombre: </label>
    <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre ?? '' }}">
    <br>
</div>
<div>
    <label>Password: </label>
    <input type="password" name="password" id="password" value="{{ $usuario->password ?? '' }}">
    <br>
</div>
<div>
    <label>Rol: </label>
    <input type="text" name="idrol" id="idrol" value="{{ $usuario->idrol ?? '' }}">
    <br>
</div>
<div>
    <label>Activo: </label>
    <input type="radio" name="activo" id="activo" value="{{ $usuario->idrol ?? '' }}">
    <br>
</div>
<button type="submit">Guardar</button>
