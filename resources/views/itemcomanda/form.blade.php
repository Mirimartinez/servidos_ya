<div>
    <label>Nro. Comanda: </label>
    <input type="text" name="idcomanda" id="idcomanda" value="{{ $itemcomanda->idcomanda ?? '' }}">
    <br>
</div>
<div>
    <label>Nro. Producto: </label>
    <input type="text" name="idproducto" id="idproducto" value="{{ $itemcomanda->idproducto ?? '' }}">
    <br>
</div>

<div>
    <label>Precio: </label>
    <input type="text" name="precio" id="precio" value="{{ $itemcomanda->precio ?? '' }}">
    <br>
</div>
<button type="submit">Guardar</button>
