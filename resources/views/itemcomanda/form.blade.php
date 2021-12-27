<div>
    <label>Nro. Comanda: </label>
    <input class="form-control m-2 text-center" type="text" name="idcomanda" id="idcomanda" value="{{ $itemcomanda->idcomanda ?? '' }}">
</div>
<div>
    <label>Nro. Producto: </label>
    <input class="form-control m-2 text-center" type="text" name="idproducto" id="idproducto" value="{{ $itemcomanda->idproducto ?? '' }}">
</div>

<div>
    <label>Precio: </label>
    <input class="form-control m-2 text-center" type="text" name="precio" id="precio" value="{{ $itemcomanda->precio ?? '' }}">
</div>
<button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>
