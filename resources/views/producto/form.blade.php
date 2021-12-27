<div>
    <label>Nombre: </label>
    <input class="form-control m-2 text-center" type="text" name="nombre" id="nombre" value="{{ $producto->nombre ?? '' }}">

</div>
<div>
    <label>Descripcion: </label>
    <input class="form-control m-2 text-center" type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion ?? '' }}">
</div>
<div>
    <label>Tipo: </label>
    <input class="form-control m-2 text-center" type="text" name="tipo" id="tipo" value="{{ $producto->tipo ?? '' }}">
</div>
<div>
    <label>Precio: </label>
    <input class="form-control m-2 text-center" type="text" name="precio" id="precio" value="{{ $producto->precio ?? '' }}">
</div>
<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
