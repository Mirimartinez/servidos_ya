<div>
    <label>Nombre: </label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre ?? '' }}">
    <br>
</div>
<div>
    <label>Descripcion: </label>
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion ?? '' }}">
    <br>
</div>
<div>
    <label>Tipo: </label>
    <input type="text" name="tipo" id="tipo" value="{{ $producto->tipo ?? '' }}">
    <br>
</div>
<div>
    <label>Precio: </label>
    <input type="text" name="precio" id="precio" value="{{ $producto->precio ?? '' }}">
    <br>
</div>
<button type="submit">Guardar</button>
