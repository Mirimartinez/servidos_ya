<div>
    <label>Importe total: </label> <br>
    <input type="text" name="importe_total" id="importe_total" value="{{ $caja->importe_total ?? '' }}">
    <br>
</div>
<div>
    <label>Fecha: </label> <br>
    <input type="date" name="fecha" id="fecha" value="{{ $caja->fecha ?? '' }}">
    <br>
</div>
<div>
    <label>Hora: </label> <br>
    <input type="time" name="hora" id="hora" value="{{ $caja->hora ?? '' }}">
    <br>
</div>
<button type="submit">Guardar</button>
